<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 24 Sep 2018 14:10:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Contact
 * 
 * @property int $id
 * @property string $address
 * @property string $telebhone
 * @property string $mobile
 * @property int $people_id
 * @property int $people_parish_id1
 * 
 * @property \App\Models\Person $person
 *
 * @package App\Models
 */
class Contact extends Eloquent
{
	protected $table = 'contact';
	public $timestamps = false;

	protected $casts = [
		'people_id' => 'int',
		'people_parish_id1' => 'int'
	];

	protected $fillable = [
		'address',
		'telebhone',
		'mobile'
	];

	public function person()
	{
		return $this->belongsTo(\App\Models\Person::class, 'people_id');
	}
}
