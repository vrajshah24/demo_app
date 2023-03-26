<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

class ApplicationDataController extends Controller
{
    //
    public function insertData(Request $mainRequest)
    {
       $request = $mainRequest->record;
        # code...
        $res = FreshProductController::insertDataFreshProduct($request);


        $focuslist = $request['focus_list'];
        for ($i = 0; $i < sizeof($focuslist); $i++) {
          $focus = FocusController::insertDataForFocus($request['focus_list'][$i]);
        }


        $outletlist = $request['outlet_list'];
        for ($i = 0; $i < sizeof($outletlist); $i++) {
           $outlet=  NewOutletController::insertDataForOutlet($request['outlet_list'][$i]);
        }


        $horecalist = $request['horeca_list'];
        for ($i = 0; $i < sizeof($horecalist); $i++) {
           $horeca = HorecaController::insertDataForHoreca($request['horeca_list'][$i]);
        }


        $deliveryboy_list = $request['delivery_boy'];
        for ($i = 0; $i < sizeof($deliveryboy_list); $i++) {
           $deliveryBoy =  DeliveryBoyController::insertDataForDeliveryBoy($request['delivery_boy'][$i]);
        }

        
        $competitor_list = $request['competitor_list'];
        for ($i = 0; $i < sizeof($competitor_list); $i++) {
           $competitor = CompetitorController::insertDataForCompetitor($request['competitor_list'][$i]);
        }

        return "Success";
    }
}