<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_info;
use DB;

class UserController extends Controller
{
    public function getData()
    {
        $data = user_info::all();
        // return json_encode($data);   
        return $data;
    }
    public function editData(Request $request)
    {
        
        DB::update('update user_info set name = ? , mobile=?, dob=?,address=? where id = ?', [$request['name'], $request['mobile'], $request['dob'], $request['address'], $request['id']]);
    }

    public function insertData(Request $request)
    {
        DB::update('Insert user_info (name,mobile,dob,address) values(?,?,?,?)', [$request['name'], $request['mobile'], $request['dob'], $request['address']]);
        }

}
