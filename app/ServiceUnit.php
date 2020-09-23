<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceUnit extends Model
{
    protected $fillable = [
        'name',
        'address'
    ];
    public function covenant(){
        return $this->belongsTo('App\Covenant');
    }
}
