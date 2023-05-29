<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facility extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'name','description'
    ];

    protected $hidden = [

    ];

    public function galleries(){
        return $this->hasMany(FacilityGallery::class,'facilities_id','id');
    }
}
