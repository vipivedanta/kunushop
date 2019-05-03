<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    

    public function parentCategory(){
        return $this->belongsTo('\App\Models\Category','parent_category','id');
    }
}
