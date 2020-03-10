<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;
class CheckoutController extends Controller
{
    public function login_check(){
    	return view('pages.login');
    }
    public function customer_registration(Request $request){

    	$data = array();
    	$data['customer_name'] = $request->customer_name;
    	$data['customer_email'] = $request->customer_email;
    	$data['password'] = md5($request->password);
    	$data['mobile_number'] = $request->mobile_number;

    	$customer_id = DB::table('tbl_customer')
    			  	->insertGetId($data);

    	Session::put('customer_id',$customer_id);
    	Session::put('customer_name',$request->customer_name);
    	return Redirect('/checkout');

    }

    public function checkout(){
    	return view('pages.checkout');
    }
    public function save_shipping(Request $request){
        $data = array();

        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_first_name'] = $request->shipping_first_name;
        $data['shipping_last_name'] = $request->shipping_last_name;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_mobile_number'] = $request->shipping_mobile_number;
        $data['shipping_city'] = $request->shipping_city;

        $shipping_id = DB::table('tbl_shipping')
                ->insertGetId($data);

        Session::put('shipping_id',$shipping_id);
        return Redirect('/payment');

    }
    public function customer_login(Request $request){
        $customer_email = $request->customer_email;
        $customer_password = md5($request->customer_password);
        $result = DB::table('tbl_customer')
                ->where('customer_email',$customer_email)
                ->where('password',$customer_password)
                ->first();

                if ($result) {
                    Session::put('customer_id',$result->customer_id);
                   return Redirect('/checkout');
                }else{
                    return Redirect('/login-check');
                }
    }
    public function customer_logout(){
        Session::flush();
        return Redirect('/');
    }
    public function payment(){

        $all_published_category = DB::table('tbl_category')
                            ->where('publication_status',1)
                            ->get();
    return view('pages.payment',compact('all_published_category'));
    }

    public function order_place(Request $request){
        $payment_getway = $request->payment_getway;
        $pdata = array();
        $pdata['payment_method'] = $payment_getway;
        $pdata['payment_status'] = 'pending';

        $payment_id = DB::table('tbl_payment')
                ->insertGetId($pdata);

        $odata = array();
        $odata['customer_id'] = Session::get('customer_id');
        $odata['shipping_id'] = Session::get('shipping_id');
        $odata['shipping_id'] = Session::get('shipping_id');
        $odata['payment_id'] =  $payment_id;
        $odata['order_total'] = Cart::total();
        $odata['order_status'] = 'pending';

        $order_id = DB::table('tbl_order')
                ->insertGetId($odata);

        $contents = Cart::content();
        $oddata = array();

        foreach ( $contents as $content) {
            $oddata['order_id'] = $order_id;
            $oddata['product_id'] = $content->id;
            $oddata['product_name'] = $content->name;
            $oddata['product_price'] = $content->price;
            $oddata['product_sales_quantity'] = $content->qty;

            DB::table('tbl_order_details')
                    ->insert($oddata);

        }

        if ($payment_getway == 'handcash') {
            Cart::destroy();
           return view('pages.handcash');

        }elseif ($payment_getway == 'bkash') {
            echo "Successfully done by Bkash";
        }elseif ($payment_getway == 'rocket') {
            echo "Successfully done by Rocket";
        }else{
            echo "Not Selected";
        }
    }

    public function manage_order(){
        $all_order_info = DB::table('tbl_order')
                        ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
                        ->select('tbl_order.*','tbl_customer.customer_name')
                        ->get();
        return view('admin.manage_order',compact('all_order_info'));
    }

    public function view_order($order_id){
        $order_by_id = DB::table('tbl_order')
                        ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
                        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
                        ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
                        ->select('tbl_order.*','tbl_order_details.*','tbl_shipping.*','tbl_customer.*')
                        ->where('tbl_order.order_id',$order_id)
                        ->get();
          // echo "<pre>";
          // print_r($order_by_id);
          // echo "<pre>";
        return view('admin.view_order',compact('order_by_id'));
    }

    public function delete_order($order_id){
        DB::table('tbl_order')
                ->where('order_id',$order_id)
                ->delete();
        Session::put('message','Order is successfully Deleted');
        return Redirect('/manage-order');
    }
}
