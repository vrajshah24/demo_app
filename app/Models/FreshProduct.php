<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreshProduct extends Model
{
    use HasFactory;
    protected $table = "psm_fresh_product";
    protected $primary_key = "id";
}
