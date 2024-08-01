<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerPreference extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'career_preferences';

    // Specify the primary key for the model
    protected $primaryKey = 'StudentID';

    // If the primary key is not an incrementing integer, set $incrementing to false
    public $incrementing = false;

    // If the primary key is not an integer, set the key type
    protected $keyType = 'integer';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'StudentID',
        'PreferredITSpecializations',
        'CareerGoals',
        'ShortTermGoals',
        'LongTermGoals',
        'PreferredIndustries',
        'PreferredJobRoles',
        'WillingnessToRelocate',
        'PreferredWorkEnvironment',
        'WorkLifeBalancePreference',
        'PreferredMethodOfRecommendations',
        'AdditionalComments',
    ];

    // Define the relationship to the 'personal_information' table
    public function personalInformation()
    {
        return $this->belongsTo(PersonalInformation::class, 'StudentID', 'StudentID');
    }
}
