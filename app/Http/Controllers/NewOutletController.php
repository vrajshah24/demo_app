<?php

namespace App\Http\Controllers;
use App\Models\NewOutlet;
use Illuminate\Http\Request;

class NewOutletController extends Controller
{
    //
    public static function insertDataForOutlet( $request)
    {
        # code...
        $newOutlet = new NewOutlet;
        $newOutlet->fresh_product_form_id = $request['fresh_product_form_id'];
        $newOutlet->outlet_name = $request['outlet_name'];
        $newOutlet->outlet_supply_qty = $request['outlet_supply_qty'];
        $res = $newOutlet->save();
        return $res;
    }
}
