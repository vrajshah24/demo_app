<?php

namespace App\Http\Controllers;
use App\Models\ProposedPlan;
use Illuminate\Http\Request;

class ProposedPlanController extends Controller
{
    //
    public static function insertData(Request $request)
    {
        # code...
        $proposed_plan = new ProposedPlan;
        $proposed_plan->psm_user_id;
        $proposed_plan->daily_activity;
        $proposed_plan->py_tgt;
    }
}
