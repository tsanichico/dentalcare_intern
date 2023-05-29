<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityGallery extends Model
{

    protected $fillable =[
        'photos','facilities_id'
    ];

    protected $hidden = [

    ];

    public function facility(){
        return $this->belongsTo(Facility::class,'facilities_id','id');
    }
}
