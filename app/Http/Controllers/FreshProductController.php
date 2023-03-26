<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\FreshProduct;

class FreshProductController extends Controller
{
    //
    public static function insertDataFreshProduct($request)
    {
        // print_r($request);
        $fresh_product = new FreshProduct;
        $fresh_product->psm_user_id = $request['psm_user_id'];
        $fresh_product->form_fill_date = $request['form_fill_date'];
        $fresh_product->longitude = $request['longitude'];
        $fresh_product->latitude = $request['latitude'];
        $fresh_product->lat_long_address = $request['lat_long_address'];
        $fresh_product->name_of_ada = $request['name_of_ada'];
        $fresh_product->name_of_beat_market = $request['name_of_beat_market'];
        $fresh_product->name_of_town = $request['name_of_town'];
        $fresh_product->total_outlet_beat = $request['total_outlet_beat'];
        $fresh_product->outlet_visited = $request['outlet_visited'];
        $fresh_product->HDB_deployed = $request['HDB_deployed'];
        $fresh_product->HAMC_booking = $request['HAMC_booking'];
        $fresh_product->HAIB_booking = $request['HAIB_booking'];
        $fresh_product->POP_deployed = $request['POP_deployed'];
        $fresh_product->new_outlet_addition = $request['new_outlet_addition'];
        $fresh_product->HoReCa_outlet_addition = $request['HoReCa_outlet_addition'];
        $fresh_product->home_delivery_boy_added = $request['home_delivery_boy_added'];
        $fresh_product->ground_activity_name = $request['ground_activity_name'];
        $fresh_product->consumer_footfall = $request['consumer_footfall'];
        $fresh_product->sales_qty = $request['sales_qty'];
        $fresh_product->feedback = $request['feedback'];
        $fresh_product->observation = $request['observation'];
        $fresh_product->branch_read = $request['branch_read'];
        $fresh_product->zone_read = $request['zone_read'];
        $fresh_product->ho_read = $request['ho_read'];
        $fresh_product->status = $request['status'];
        $fresh_product->ip_address = $request['ip_address'];
        $res = $fresh_product->save();
        // echo $res;
        return $res;
    }
}