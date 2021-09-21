<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rencana extends Model
{
    //
    protected $table = 'a_rencana';
    protected $foreign = 'tipe_anggaran';

    function tipe() {
    	return $this->belongsTo(Tipe::class, 'tipe_anggaran', 'tipe_id');
    }
}
