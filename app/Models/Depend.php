<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depend extends Model
{
    protected $fillable = ['title','firstname','lastname','age','nic','familyhead_id','gender'
];

public function people() {
    return $this->belongsTo(People::class,'familyhead_id');

}
}


