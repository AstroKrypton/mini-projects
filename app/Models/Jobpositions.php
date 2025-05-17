<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobpositions extends Model
{
    use HasFactory;
    protected $table = 'jobpositions';
    protected $primaryKey = 'JobId';
    public $timestamps = true;
    protected $fillable = [
        'Title',
        'Department',
        'Description',
        'RequiredQualifications',
    ];
}
