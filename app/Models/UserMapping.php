<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 24 Sep 2018 14:10:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserMapping
 * 
 * @property int $id
 * @property int $previlages_id
 * @property int $roles_id
 * @property int $user_id
 *
 * @package App\Models
 */
class UserMapping extends Eloquent
{
	protected $table = 'user_mapping';
	public $timestamps = false;

	protected $casts = [
		'previlages_id' => 'int',
		'roles_id' => 'int',
		'user_id' => 'int'
	];
}
