<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 24 Sep 2018 14:10:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Chaple
 * 
 * @property int $id
 * @property string $name
 * @property string $saint
 * 
 * @property \Illuminate\Database\Eloquent\Collection $parishes
 *
 * @package App\Models
 */
class Chaple extends Eloquent
{
	protected $table = 'chaple';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'saint'
	];

	public function parishes()
	{
		return $this->hasMany(\App\Models\Parish::class);
	}
}
