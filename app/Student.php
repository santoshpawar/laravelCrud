<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    //
    protected $table='students';
    protected $fillable = [
        'name',
        'city',
        'phoneno',
        'body',
        'publichedAt',
        'user_id'



    ];
/*
 * Creating carbon instance
 */
    protected $dates=['publichedAt'];

    public function scopeUnPublished($query){
    $query->where('publichedAt','>=',Carbon::now());
    }

    /**
     * @param $query
     */
    public function scopePublished($query){
        $query->where('publichedAt','<',Carbon::now());
    }

    /**
     * @param $query
     */

    //setDateAttribute
    //if underscore just convert it to camelcase
    /**
     * @param $date
     */
    public function setpublichoedAtAttribute($date){
        $this->attributes['publichedAt']=Carbon::createFromFormat('Y-m-d',$date);

    }


    /**
     * a  article/student is owned by user
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(){
        return $this->belongsTo('App\user');
    }
}
//$student->user
//$student->owner
//$student->writer