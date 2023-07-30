<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;


    //one to may relationship
    public function invoice(){
        return $this->hasMany(Invoice::class);
    }
}
