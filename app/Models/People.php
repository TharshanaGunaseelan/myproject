<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'title','firstname','lastname','address','age','religion','ethnic','nic','village_id','gender'
    ];

    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id');
    }

    public function depends()
    {
        return $this->hasMany(Depend::class, 'familyhead_id');
    }

    public function payments() {
        return $this->hasMany(Payment::class,'familyhead_id');
    }


    

}
