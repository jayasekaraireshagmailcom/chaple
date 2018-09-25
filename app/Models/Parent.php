<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 24 Sep 2018 14:10:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Parent
 * 
 * @property int $id
 * @property string $name_f
 * @property string $name_m
 * @property string $catholic_f
 * @property string $catholic_m
 * @property string $name_m_f
 * @property string $name_m_m
 * @property string $catholic_m_f
 * @property string $catholic_m_m
 * @property int $people_id
 * @property int $people_parish_id1
 * @property string $have_book
 * @property string $remarks
 * 
 * @property \App\Models\Person $person
 *
 * @package App\Models
 */
class Parent extends Eloquent
{
	protected $table = 'parent';
	public $timestamps = false;

	protected $casts = [
		'people_id' => 'int',
		'people_parish_id1' => 'int'
	];

	protected $fillable = [
		'name_f',
		'name_m',
		'catholic_f',
		'catholic_m',
		'name_m_f',
		'name_m_m',
		'catholic_m_f',
		'catholic_m_m',
		'have_book',
		'remarks'
	];

	public function person()
	{
		return $this->belongsTo(\App\Models\Person::class, 'people_id');
	}
}
