<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';public $timestamps = false;
    protected $fillable = [
        'id', 'family_book_num','name_f', 'name_m','dob_f','dob_m','fdeath_date','mdeath_date','place_of_baptism_f','place_of_baptism_m','race_f','race_m','religion_f','peoplecol','date_of_marriage','place','employment_f','employment_m','resposibility_p_f','details_pf','responsibility_p_m','details_f','include_in_meetings_f','details','include_in_meetings_m','details_m','remarks','parish_id1'
    ];
    public function parish()
    {
        return $this->hasOne('App\Parish');
    }
    public function recordupdate_2($id,$records){
	$people = People::find($id);

	$people->name_m = $records[0];

	$people->save();
	return true;   	
    }        
}
