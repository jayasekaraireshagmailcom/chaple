<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent1 extends Model
{
    protected $table = 'parent';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name_f', 'name_m','catholic_f','catholic_m','name_m_f','name_m_m','catholic_m_f','catholic_m_m','people_id','people_parish_id1','have_book','remarks'
    ];
    public function people()
    {
        return $this->hasOne('App\People');
    } 
    public function parish()
    {
        return $this->belongsTo('App\Parish');
    }           
}
