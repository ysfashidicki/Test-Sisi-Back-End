<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distributors extends Model
{
    protected $table = "distributors";
    public function products()
    {
        return $this->belongsToMany('App\Products');
    }
}
