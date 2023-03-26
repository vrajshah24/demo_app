<?php

namespace App\Http\Controllers;
use App\Models\Competitors;
use Illuminate\Http\Request;

class CompetitorController extends Controller
{
    //
    public static function insertDataForCompetitor($request){
        $competitor = new Competitors;
        $competitor->fresh_product_form_id = $request['fresh_product_form_id'];
        $competitor->product = $request['product'];
        $competitor->fat = $request['fat'];
        $competitor->snf = $request['snf'];
        $competitor->mrp = $request['mrp'];
        $competitor->retail_rate = $request['retail_rate'];
        $competitor->scheme_info = "";
        $res = $competitor->save();
        return $res;
    }
}
