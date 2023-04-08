<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $table = 'covid_result';
    protected $primaryKey = 'id';
    protected $fillable =[
        'country', 'cases', 'todayCases', 'remember_token', 'created_at', 'updated_at'
    ];
}
