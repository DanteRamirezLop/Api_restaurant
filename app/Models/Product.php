<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    public function scopeGetOrPaginate(Builder $query){
        if(request('perPage')){
            $perPage = intval(request('perPage'));
            if($perPage){
                return $query->paginate($perPage);
            }
        }
        return $query->get();
    }
}
