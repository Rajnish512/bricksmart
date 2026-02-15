<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $tabe = "news";
    protected $primarykey = "id ";
    protected $fillable = ['news_heading', 'img', 'uploaded_by','news_description','news_date'];
}
