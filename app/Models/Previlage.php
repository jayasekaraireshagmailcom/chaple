<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 24 Sep 2018 14:10:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Previlage
 * 
 * @property int $id
 * @property string $previlages
 *
 * @package App\Models
 */
class Previlage extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'previlages'
	];
}
