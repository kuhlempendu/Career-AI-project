<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $table = 'personal_information';

    protected $fillable = [
        'FullName', 'DateOfBirth', 'Age', 'Gender', 'Nationality', 'Email',
        'PhoneNumber', 'Address', 'LanguagesSpoken', 'PersonalityTraits',
        'LearningStyle', 'HobbiesAndInterests'
    ];

    protected $casts = [
        'LanguagesSpoken' => 'array',
        'PersonalityTraits' => 'array',
        'HobbiesAndInterests' => 'array',
    ];

    public function academicInformation()
    {
        return $this->hasOne(AcademicInformation::class, 'StudentID');
    }

    public function careerPreference()
    {
        return $this->hasOne(CareerPreference::class, 'StudentID');
    }
}
