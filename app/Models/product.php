<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='products';

    public function type_product(){
        return $this -> belongsTo("App\ type_product");
    }

    public function bill_detail(){
        return $this -> belongsTo("App\bill_detail");
    }
}
