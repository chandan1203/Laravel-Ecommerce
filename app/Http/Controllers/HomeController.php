<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class HomeController extends Controller
{
    public function index()
    {
    	$all_published_product = DB::table('tbl_products')
                        ->join('tbl_category','tbl_category.category_id','=','tbl_products.category_id')
                        ->join('tbl_manufacture','tbl_manufacture.manufacture_id','=','tbl_products.manufacture_id')
                        ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
                        ->where('tbl_products.publication_status',1)
                        ->limit(9)
                        ->get();
    	return view("pages.home",compact('all_published_product'));
    }

    public function show_product_by_category($category_id){
        $product_by_category = DB::table('tbl_products')
                        ->join('tbl_category','tbl_category.category_id','=','tbl_products.category_id')
                        ->select('tbl_products.*','tbl_category.category_name')
                        ->where('tbl_category.category_id',$category_id)
                        ->where('tbl_products.publication_status',1)
                        ->limit(9)
                        ->get();
        return view("pages.category_by_products",compact('product_by_category'));
    }

        public function show_product_by_manufacture($manufacture_id){
        $product_by_manufacture = DB::table('tbl_products')
                        ->join('tbl_manufacture','tbl_manufacture.manufacture_id','=','tbl_products.manufacture_id')
                        ->select('tbl_products.*','tbl_manufacture.manufacture_name')
                        ->where('tbl_manufacture.manufacture_id',$manufacture_id)
                        ->where('tbl_products.publication_status',1)
                        ->limit(9)
                        ->get();
        return view("pages.manufacture_by_products",compact('product_by_manufacture'));
    }
    public function view_product_by_id($product_id){
        $products_by_details = DB::table('tbl_products')
                        ->join('tbl_category','tbl_category.category_id','=','tbl_products.category_id')
                        ->join('tbl_manufacture','tbl_manufacture.manufacture_id','=','tbl_products.manufacture_id')
                        ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
                        ->where('tbl_products.product_id',$product_id)
                        ->where('tbl_products.publication_status',1)
                        ->limit(9)
                        ->first();
        return view("pages.product_details",compact('products_by_details'));
    }

    public function search_product(Request $request){
        // $search = $request->search;
        // $products = DB::table('tbl_products')->orWhere('product_name','like', '%'.$search.'%')
        // ->orWhere('product_short_description','like','%'.$search.'%')
        // ->orWhere('product_price','like','%'.$search.'%')
        // ->paginate(9);

        // echo "<pre>";
        // print_r($products);
        // echo "</pre>";

        $searchData = $request->searchData;

        $data = DB::table('tbl_products')
                ->where('product_name','like','%'.$searchData.'%')
                ->get();
        return view('pages.search_product');

    }

    public function contact_page(){
        return view('pages.contact_page');
    }
}
