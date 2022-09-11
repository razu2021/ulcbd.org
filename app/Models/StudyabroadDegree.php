<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyabroadDegree extends Model
{
    use HasFactory;

    protected $primaryKey='choose_id';
    
    public function creatorInfo(){
        return $this->belongsTo('App\Models\user','choose_creator','id');
    }

    public function editorInfo(){
        return $this->belongsTo('App\Models\user','choose_editor','id');
    }
}
