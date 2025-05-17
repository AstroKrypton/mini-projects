<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;
    protected $table = 'applications';
    protected $primaryKey = 'ApplicationId';
    protected $fillable = [
        'JobId',
        'ApplicationStatus',
        'ReviewDate'
    ];
    public function jobposition()
    {
        return $this->belongsTo(Jobposition::class, 'JobId', 'JobId');
    }
    public function recruitmentStages()
    {
        return $this->hasMany(RecruitmentStage::class, 'ApplicationId', 'ApplicationId');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'UserId', 'UserId');
    }
}
