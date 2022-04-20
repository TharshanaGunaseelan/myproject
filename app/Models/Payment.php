<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payemnt type','status','deathdate','familyhead_id','depend_id'
    ];

    public function people() {
        return $this->belongsTo(People::class,'familyhead_id');
    }

    public function depends()
    {
        return $this->hasMany(Depend::class, 'familyhead_id');
    }

}
