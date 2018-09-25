<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 24 Sep 2018 14:10:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Parish
 * 
 * @property int $id
 * @property string $zone
 * @property string $novena
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $created_at
 * @property int $chaple_id
 * 
 * @property \App\Models\Chaple $chaple
 * @property \Illuminate\Database\Eloquent\Collection $people
 *
 * @package App\Models
 */
class Parish extends Eloquent
{
	protected $table = 'parish';

	protected $casts = [
		'chaple_id' => 'int'
	];

	protected $fillable = [
		'zone',
		'novena'
	];

	public function chaple()
	{
		return $this->belongsTo(\App\Models\Chaple::class);
	}

	public function people()
	{
		return $this->hasMany(\App\Models\Person::class, 'parish_id1');
	}
}
