<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    protected $table = 'parish';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','zone','novena','chaple_id'
    ];
   

	    public function chaple()
	    {
	        return $this->hasMany('App\Chaple', 'id', 'chaple_id');
	    }

        public static function getparishdata($id,$parishid){
        $array = array();
        foreach (Chaple::where('id',$id)->get() as $value){
		$array[0] = $value->name;
		$array[1] = $value->saint;
        }
        foreach (Parish::where('id',$parishid)->get() as $value){
		$array[2] = $value->novena;
		$array[3] = $value->zone;
        } 
               
        return $array;
         
    }             
}
