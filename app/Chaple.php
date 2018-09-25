<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chaple extends Model
{
    protected $table = 'chaple';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'saint',
    ];

    public function chaple()
    {
        return $this->hasOne('App\Parish','name','name');
    } 
    
    public function getchapledata(){
        $array = array();
        foreach (Chaple::all() as $value) {
            $array[$value->id] = $value->name;
        }
        natcasesort($array);
        return $array;    	
    }
    public function getsaintdata($id){
        $array = array();
        foreach (Chaple::where('id',$id)->get() as $value) {
            $array[$value->id] = $value->saint;
        }
        natcasesort($array);
        return $array;    	
    }    
}
