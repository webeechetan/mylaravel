<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Carbon\Carbon;


class Post extends Model
{
    use HasFactory;

    public function getTitleAttribute($val){
        return ucfirst($val);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function getCreatedAtAttribute($val){
        return Carbon::parse($val)->diffForHumans();
    }

    public function setTitleAttribute($val){
        $this->title = ucfirst($val);
    }
}
