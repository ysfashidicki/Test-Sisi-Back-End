<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = "products";
    public function distributors()
    {
        return $this->belongsToMany('App\Distributors');
    }
}
