<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    //
    protected $table = 'a_tipe';
    protected $primary = 'tipe_id';

    function rencana() {
    	return $this->hasMany(Rencana::class, 'tipe_anggaran');
    }
}
