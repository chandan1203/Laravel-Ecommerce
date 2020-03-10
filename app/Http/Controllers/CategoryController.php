<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryController extends Controller
{
    public function index()
    {
        $this->AdminAuthCheck();
    	return view('admin.add_category');
    }

     public function all_category()
    {
        $this->AdminAuthCheck();
    	$all_category_info = DB::table('tbl_category')->get();
    	return view('admin.all_category',compact('all_category_info'));
    }

    public function save_category(Request $request)
    {
        $this->AdminAuthCheck();
    	$data = array();
    	$data['category_name'] = $request->category_name;
    	$data['category_description'] = $request->category_description;
    	$data['publication_status'] = $request->publication_status;

    	DB::table('tbl_category')->insert($data);
    	Session::put('message','Category is successfully added');
    	return Redirect('/all-category');

    }

    public function edit_category($category_id){
        $this->AdminAuthCheck();

        $category = DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->first();

        return view('admin.edit_category',compact('category'));
    }

    public function unactive_category($category_id){
        $this->AdminAuthCheck();
        DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update(['publication_status' => 0]);
                Session::put('message','Category unactivated successfully');
                return Redirect('/all-category');
    }
    public function active_category($category_id){
        $this->AdminAuthCheck();
        DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update(['publication_status' => 1]);
                Session::put('message','Category activated successfully');
                return Redirect('/all-category');
    }
    public function update_category( Request $request,$category_id)
    {
        $this->AdminAuthCheck();

        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['publication_status'] = $request->publication_status;



        DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update($data);
        Session::put('message','Category is successfully updated');
        return Redirect('/all-category');
    }

    public function delete_category($category_id){
        $this->AdminAuthCheck();
        DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->delete();
        Session::put('message','Category is successfully Deleted');
        return Redirect('/all-category');
    }

    public function AdminAuthCheck(){
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return;
        }else{
            return Redirect('/admin')->send();
        }
    }
}
