<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id','patient_name','name','type','department','end_date','start_date','date','status','seconed_date'
    ];
    //protected $dates = ['end_date','start_date','date'];

}
