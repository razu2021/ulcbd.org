<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactContactform extends Model
{
    use HasFactory;

    protected $primaryKey='contact_id';
    
    public function creatorInfo(){
        return $this->belongsTo('App\Models\user','creator','id');
    }

    public function editorInfo(){
        return $this->belongsTo('App\Models\user','editor','id');
    }
}
