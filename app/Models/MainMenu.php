<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    use HasFactory;

    protected $primaryKey='mainmenu_id';
    
    public function creatorInfo(){
        return $this->belongsTo('App\Models\user','post_creator','id');
    }

    public function editorInfo(){
        return $this->belongsTo('App\Models\user','post_editor','id');
    }
}
