<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposedPlan extends Model
{
    use HasFactory;
    protected $table = "psm_fresh_proposed_plan";
    protected $primary_key = "id";
}
