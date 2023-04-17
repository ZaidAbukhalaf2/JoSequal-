<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = ['First_name','Last_name','email','company_id','phone'];


    public function Company(){

        return $this->belongsTo(Companies::class,'company_id');
    }

}
