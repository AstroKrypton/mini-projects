<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;

    protected $table = 'applicants';
    protected $primaryKey = 'ApplicantId';
    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'ContactNumber',
        'ApplicationDate'
    ];
    public $timestamps = true;
    
    public function applications()
    {
        return $this->hasMany(Applications::class, 'ApplicantId', 'ApplicantId');
    }
    public function recruitmentStages()
    {
        return $this->hasMany(RecruitmentStage::class, 'ApplicantId', 'ApplicantId');

}
}
