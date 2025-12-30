<?php

namespace App\Controllers\Products;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Product\Cart;
class Products extends BaseController
{
    public function __construct() {        
        $this->db = \Config\Database::connect();
    }
    public function productDetails($id)
    {
        $product=$this->db->query("SELECT * FROM products where id='$id'")->getFirstRow();
        $relatedProducts=$this->db->query("SELECT * FROM products WHERE id!='$id' AND category_id='$product->category_id' ORDER BY id DESC LIMIT 5")->getResult();
        $count = $this->db->table('cart')
                      ->where('pro_id', $id)
                      ->where('user_id', auth()->user()->id)
                      ->countAllResults();        
        return view("products/single-product",compact('product','relatedProducts','count'));
    }
    public function shop()
    {
        $categories=$this->db->query("SELECT * FROM categories")->getResult();
        $mostWantedProduct=$this->db->query("SELECT * FROM products ORDER BY name DESC LIMIT 5")->getResult();
        $vegProducts=$this->db->query("SELECT * FROM products WHERE category_id=6 ORDER BY id DESC LIMIT 5")->getResult();
        $meatProducts=$this->db->query("SELECT * FROM products WHERE category_id=4 ORDER BY id DESC LIMIT 5")->getResult();        
        $fishProducts=$this->db->query("SELECT * FROM products WHERE category_id=1 ORDER BY id DESC LIMIT 5")->getResult();
        $fruitProducts=$this->db->query("SELECT * FROM products WHERE category_id=3 ORDER BY id DESC LIMIT 5")->getResult();
        return view("products/shop",compact('categories','mostWantedProduct','vegProducts','meatProducts','fishProducts','fruitProducts'));
    }
    public function addToCart(){
        $cart = new Cart;
        $pro_id=$this->request->getPost('pro_id');
        $data=["pro_id"=>$pro_id,
        "user_id"=>auth()->user()->id,
        "qty"=>$this->request->getPost('qty'),
        "name"=>$this->request->getPost('name'),
        "price"=>$this->request->getPost('price'),"image"=>$this->request->getPost('image'),"subtotal"=>$this->request->getPost('price')*$this->request->getPost('qty')];
        session()->setFlashdata('success','Product added to cart');
        $cart->save($data);
        return redirect()->to(base_url('products/single-product/'.$pro_id.''));
    }
    public function cart()
    {
        $id = auth()->user()->id;
        $cartItems=$this->db->query("SELECT * FROM cart WHERE user_id='$id' ORDER BY created_at DESC")->getResult();
        $totalPrice=$this->db->query("SELECT SUM(subtotal) AS whole_price FROM `cart` WHERE user_id='$id'")->getFirstRow();
        return view("products/cart",compact('cartItems','totalPrice'));
    }
    public function deleteFromCart($id)
    {
        $deleteProduct=new Cart();
        $deleteProduct->delete($id);
        session()->setFlashdata('success','Product deleted from cart');
        return redirect()->to(base_url('products/cart'));
    }
    public function prepareCheckout()
    {
        $price=$this->request->getPost('price');
        $session=session();
        $session->set('price',$price);
        if($price > 0){
            return redirect()->to(base_url('products/checkout'));
        }
    }
    public function checkout(){
        //$session=session();
        //echo "total price for cart is: ".$session->get('price');
        $id = auth()->user()->id;
        $cartItems=$this->db->query("SELECT * FROM cart WHERE user_id='$id' ORDER BY created_at DESC")->getResult();
        $subtotalPrice = $this->db->query("SELECT SUM(subtotal) AS whole_price FROM `cart` WHERE user_id='$id'")->getFirstRow();
        return view("products/checkout",compact('cartItems','subtotalPrice')); 
    }   
}
