<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 24 Sep 2018 14:10:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FamilyMember
 * 
 * @property int $id
 * @property string $name
 * @property string $live
 * @property string $dob
 * @property string $baptism_place
 * @property string $confirmation
 * @property string $race
 * @property string $religion
 * @property string $school
 * @property string $grade
 * @property string $daham_pasala
 * @property string $relationship
 * @property string $employment
 * @property string $married_in
 * @property string $responsibility_p
 * @property string $remarks
 * 
 * @property \Illuminate\Database\Eloquent\Collection $members_mappings
 *
 * @package App\Models
 */
class FamilyMember extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'live',
		'dob',
		'baptism_place',
		'confirmation',
		'race',
		'religion',
		'school',
		'grade',
		'daham_pasala',
		'relationship',
		'employment',
		'married_in',
		'responsibility_p',
		'remarks'
	];

	public function members_mappings()
	{
		return $this->hasMany(\App\Models\MembersMapping::class, 'family_members_id');
	}
}
