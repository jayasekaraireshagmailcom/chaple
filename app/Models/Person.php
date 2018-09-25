<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 24 Sep 2018 14:10:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Person
 * 
 * @property int $id
 * @property string $family_book_num
 * @property string $name_f
 * @property string $name_m
 * @property string $dob_f
 * @property string $place_of_baptism_f
 * @property string $place_of_baptism_m
 * @property string $race_f
 * @property string $race_m
 * @property string $religion_f
 * @property string $peoplecol
 * @property string $date_of_marriage
 * @property string $place
 * @property string $employment_f
 * @property string $employment_m
 * @property string $resposibility_p_f
 * @property string $details_pf
 * @property string $responsibility_p_m
 * @property string $details_f
 * @property string $include_in_meetings_f
 * @property string $details
 * @property string $include_in_meetings_m
 * @property string $details_m
 * @property string $remarks
 * @property int $parish_id1
 * 
 * @property \App\Models\Parish $parish
 * @property \Illuminate\Database\Eloquent\Collection $contacts
 * @property \Illuminate\Database\Eloquent\Collection $parents
 *
 * @package App\Models
 */
class Person extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'parish_id1' => 'int'
	];

	protected $fillable = [
		'family_book_num',
		'name_f',
		'name_m',
		'dob_f',
		'place_of_baptism_f',
		'place_of_baptism_m',
		'race_f',
		'race_m',
		'religion_f',
		'peoplecol',
		'date_of_marriage',
		'place',
		'employment_f',
		'employment_m',
		'resposibility_p_f',
		'details_pf',
		'responsibility_p_m',
		'details_f',
		'include_in_meetings_f',
		'details',
		'include_in_meetings_m',
		'details_m',
		'remarks'
	];

	public function parish()
	{
		return $this->belongsTo(\App\Models\Parish::class, 'parish_id1');
	}

	public function contacts()
	{
		return $this->hasMany(\App\Models\Contact::class, 'people_id');
	}

	public function parents()
	{
		return $this->hasMany(\App\Models\Parent::class, 'people_id');
	}
}
