<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    protected $fillable = [
        'title', 'img', 'description', 'describe', 'category_id'
       ];
    
       public function category(){
        return $this->belongsTo('App\Models\Category');
       }
}
