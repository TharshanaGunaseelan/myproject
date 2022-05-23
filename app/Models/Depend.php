<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Depend extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','firstname','lastname','age','nic','familyhead_id','gender'
];

public function people() {
    return $this->belongsTo(People::class,'familyhead_id');

}

public function payments() {
    return $this->hasMany(Payment::class,'depend_id');
}
}


