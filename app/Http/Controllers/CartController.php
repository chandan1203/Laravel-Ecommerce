<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Cart;


class CartController extends Controller
{
   public function add_to_cart(Request $request)
   {
   		$qty = $request->qty;
   		$product_id = $request->product_id;

   		$product_info = DB::table('tbl_products')
   					->where('product_id',$product_id)
   					->first();
   		$data['qty'] = $qty;
   		$data['id'] = $product_info->product_id;
   		$data['price'] = $product_info->product_price;
   		$data['name'] = $product_info->product_name;
   		$data['options']['image'] = $product_info->product_image;
   		//

   		Cart::add($data);
   		return Redirect('/show-cart');

   }
   public function show_cart(){
   	$all_published_category = DB::table('tbl_category')
   							->where('publication_status',1)
   							->get();
   	return view('pages.add_to_cart',compact('all_published_category'));
   }
   public function delete_cart($rowId){
   		Cart::update($rowId,0);
   		return Redirect('/show-cart');

   }
   public function update_cart(Request $request)
   {
   		$qty = $request->qty;
   		$rowId = $request->rowId;

   		Cart::update($rowId,$qty);
   		return Redirect('/show-cart');

   }
}
