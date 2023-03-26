<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Focus;
class FocusController extends Controller
{
    //
    public static function insertDataForFocus($request)
    {
        # code...
        // return $request;
        $focus = new Focus;
        $focus->fresh_product_form_id = $request['fresh_product_form_id'];
        $focus->focus_pack_id = $request['focus_pack_id'];
        $focus->focus_sales_qty = $request['focus_sales_qty'];
        $res = $focus->save();
        return $res;
    } 
}
