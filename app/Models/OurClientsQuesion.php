<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClientsQuesion extends Model
{
    use HasFactory;


    protected $primaryKey='clientsq_id';
    
    public function creatorInfo(){
        return $this->belongsTo('App\Models\user','creator','id');
    }

    public function editorInfo(){
        return $this->belongsTo('App\Models\user','editor','id');
    }
}
