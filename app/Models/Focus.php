<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Focus extends Model
{
    use HasFactory;
    protected $table = "psm_fresh_product_focus";
    protected $primary_key = "id";
}
