<?php

namespace App\Http\Controllers;
use App\Models\Horeca;
use Illuminate\Http\Request;

class HorecaController extends Controller
{
    //
    public static function insertDataForHoreca($request)
    {
        # code...
        $horeca = new Horeca;
        $horeca->fresh_product_form_id = $request['fresh_product_form_id'];
        $horeca->HoReCa_outlet_name = $request['horeca_outlet_name'];
        $horeca->HoReCa_supply_qty = $request['horeca_supply_qty'];
        $res = $horeca->save();
        return $res;
    }
}
