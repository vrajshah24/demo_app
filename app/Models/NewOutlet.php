<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewOutlet extends Model
{
    use HasFactory;
    protected $table = "psm_fresh_product_new_outlet";
    protected $primary_key = "id";
}
