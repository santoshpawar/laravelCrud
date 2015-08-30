<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blog extends Model
{
    //
    protected $table='blog';
    protected $fillable=[
        'name',
        'description',
        'text',
        'blogNo',
        'tags',
        'publishedAt',
        'user_id'


    ];
    protected $dates=['publishedAt'];
    //public $value=['description'];


 public function setpublishedAtAttribute($date){
     //$this->attributes['publishedAt']=Carbon::createFromFormat('Y',$date);
     $this->attributes['publishedAt']=Carbon::parse($date);
 }

    public function getdescriptionAttribute($value){
        return ucfirst($value);
    }
    public function scopePublished($query){
       $query ->where('publishedAt','<',Carbon::now());
    }

public function user(){
   // return $this->belongsTo('App\User');
}


}
