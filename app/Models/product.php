<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
      protected $tabe = "products";
    protected $primarykey = "id ";
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
