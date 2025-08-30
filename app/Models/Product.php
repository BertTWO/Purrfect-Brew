<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

   protected $fillable = [
        'name',
        'description',
        'stock',
        'category',
        'image_path',
        'price',
    ];

    public function scopeSearch($query,$term)
    {
        if($term)
        {
            $term = "%{$term}%";
            $query->where(function($sql) use ($term){
                $sql->where('name','like',$term)
                    ->orWhere('category','like',$term)
                    ->orWhere('price','like',$term)
                    ->orWhere('stock','like',$term);
            });
        }
    }
    public function scopeFilterCategory($query,$term)
    {
        if($term)
        {
            $term = "%{$term}%";
            $query->where(function($sql) use ($term){
                $sql->where('category','like',$term);
            });
        }
    }

}
