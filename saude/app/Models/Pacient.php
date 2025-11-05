<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
   protected $fillable = ['name','birth_date', 'email','address','doctor_id'];

       public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

}
