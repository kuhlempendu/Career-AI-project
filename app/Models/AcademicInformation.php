<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicInformation extends Model
{
    use HasFactory;

    protected $table = 'academic_information';

    protected $fillable = [
        'StudentID', 'CurrentDegreeProgram', 'YearOfStudy', 'ExpectedGraduationDate',
        'OverallGPA', 'MajorGPA', 'CompletedCourses', 'CurrentCourses',
        'FavoriteSubjects', 'LeastFavoriteSubjects', 'TechnicalSkills', 'SoftSkills',
        'Certifications', 'Projects', 'Internships', 'ClubsAndOrganizations',
        'VolunteerExperience', 'FeedbackOnCurriculum'
    ];

    protected $casts = [
        'CompletedCourses' => 'array',
        'CurrentCourses' => 'array',
        'FavoriteSubjects' => 'array',
        'LeastFavoriteSubjects' => 'array',
        'TechnicalSkills' => 'array',
        'SoftSkills' => 'array',
        'Certifications' => 'array',
        'Projects' => 'array',
        'Internships' => 'array',
        'ClubsAndOrganizations' => 'array',
        'VolunteerExperience' => 'array',
    ];

    public function personalInformation()
    {
        return $this->belongsTo(PersonalInformation::class, 'StudentID');
    }
}
