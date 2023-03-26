<?php

namespace App\Http\Controllers;
use App\Models\DeliveryBoy;
use Illuminate\Http\Request;

class DeliveryBoyController extends Controller
{
    //
    public static function insertDataForDeliveryBoy( $request){
        $delivery_boy = new DeliveryBoy;
        $delivery_boy->fresh_product_form_id = $request['fresh_product_form_id'];
        $delivery_boy->boy_name = $request['boy_name'];
        $delivery_boy->area_id = $request['area_id'];
        $delivery_boy->no_house_cover = $request['no_house_cover'];
        $delivery_boy->delivery_supply_qty = $request['delivery_supply_qty'];
        $res = $delivery_boy->save();
        return $res;
    }
   
}
