<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 24 Sep 2018 14:10:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MembersMapping
 * 
 * @property int $id
 * @property int $family_members_id
 * @property int $people_id
 * @property int $people_parish_id1
 * 
 * @property \App\Models\FamilyMember $family_member
 *
 * @package App\Models
 */
class MembersMapping extends Eloquent
{
	protected $table = 'members_mapping';
	public $timestamps = false;

	protected $casts = [
		'family_members_id' => 'int',
		'people_id' => 'int',
		'people_parish_id1' => 'int'
	];

	public function family_member()
	{
		return $this->belongsTo(\App\Models\FamilyMember::class, 'family_members_id');
	}
}
