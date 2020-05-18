<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $table = 'products';
    protected $fillable = ['id', 'title', 'description'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
