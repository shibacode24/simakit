<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cmakeit extends Model
{
    use HasFactory;
    protected $table="surveys";
    protected $fillable=['survey_number','establishment_name','image'];
}
