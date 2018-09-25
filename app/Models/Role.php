<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 24 Sep 2018 14:10:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class Role extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
