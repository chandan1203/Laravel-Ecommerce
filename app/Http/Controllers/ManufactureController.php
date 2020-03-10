<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ManufactureController extends Controller
{
    public function index(){
        $this->AdminAuthCheck();
    	return view('admin.add_manufacture');
    }

    public function all_manufacture(){
        $this->AdminAuthCheck();
    	$all_manufacture_info = DB::table('tbl_manufacture')->get();
    	return view('admin.all_manufacture',compact('all_manufacture_info'));
    }

	public function save_manufacture(Request $request)
    {
        $this->AdminAuthCheck();
    	$data = array();
    	$data['manufacture_name'] = $request->manufacture_name;
    	$data['manufacture_description'] = $request->manufacture_description;
    	$data['publication_status'] = $request->publication_status;

    	DB::table('tbl_manufacture')->insert($data);
    	Session::put('success','Manufacture Added Successfully');
    	return Redirect('/all-manufacture');
    }

    public function edit_manufacture($manufacture_id){
        $this->AdminAuthCheck();
    	$manufacture = DB::table('tbl_manufacture')
    			->where('manufacture_id',$manufacture_id)
    			->first();
    	return view('admin.edit_manufacture',compact('manufacture'));
    }

    public function delete_manufacture($manufacture_id){
        $this->AdminAuthCheck();
    	DB::table('tbl_manufacture')
    			->where('manufacture_id',$manufacture_id)
    			->delete();
    	Session::put('success','Manufacture Deleted Successfully');
    	return Redirect('/all-manufacture');
    }

    public function update_manufacture( Request $request,$manufacture_id)
    {
        $this->AdminAuthCheck();

        $data = array();
        $data['manufacture_name'] = $request->manufacture_name;
        $data['manufacture_description'] = $request->manufacture_description;
        $data['publication_status'] = $request->publication_status;



        DB::table('tbl_manufacture')
                ->where('manufacture_id',$manufacture_id)
                ->update($data);
        Session::put('message','Manufature is successfully updated');
        return Redirect('/all-manufacture');
    }

    public function unactive_manufacture($manufacture_id){
        $this->AdminAuthCheck();
    	DB::table('tbl_manufacture')
    			->where('manufacture_id',$manufacture_id)
    			->update(['publication_status' => 0 ]);
    	Session::put('message', 'Manufacture unactive successfully');
    	return Redirect('/all-manufacture');
    }

        public function active_manufacture($manufacture_id){
            $this->AdminAuthCheck();
    	   DB::table('tbl_manufacture')
    			->where('manufacture_id',$manufacture_id)
    			->update(['publication_status' => 1 ]);
    	Session::put('message', 'Manufacture active successfully');
    	return Redirect('/all-manufacture');
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