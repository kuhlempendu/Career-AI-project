<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AcademicInformation;
use Illuminate\Support\Facades\Auth;

class AcademicInformations extends Component
{
    public $current_degree_program;
    public $year_of_study;
    public $expected_graduation_date;
    public $overall_gpa;
    public $major_gpa;
    public $completed_courses;
    public $current_courses;
    public $favorite_subjects;
    public $least_favorite_subjects;
    public $technical_skills;
    public $soft_skills;
    public $certifications;
    public $projects;
    public $internships;
    public $clubs_and_organizations;
    public $volunteer_experience;
    public $feedback_on_curriculum;

    protected $rules = [
        'current_degree_program' => 'nullable|string|max:255',
        'year_of_study' => 'nullable|string|max:50',
        'expected_graduation_date' => 'nullable|date',
        'overall_gpa' => 'nullable|numeric|min:0|max:4',
        'major_gpa' => 'nullable|numeric|min:0|max:4',
        'completed_courses' => 'nullable|string',
        'current_courses' => 'nullable|string',
        'favorite_subjects' => 'nullable|string',
        'least_favorite_subjects' => 'nullable|string',
        'technical_skills' => 'nullable|string',
        'soft_skills' => 'nullable|string',
        'certifications' => 'nullable|string',
        'projects' => 'nullable|string',
        'internships' => 'nullable|string',
        'clubs_and_organizations' => 'nullable|string',
        'volunteer_experience' => 'nullable|string',
        'feedback_on_curriculum' => 'nullable|string',
    ];

    public function save()
    {
        $this->validate();

        AcademicInformation::updateOrCreate(
            ['StudentID' => Auth::user()->id],
            [
                'CurrentDegreeProgram' => $this->current_degree_program,
                'YearOfStudy' => $this->year_of_study,
                'ExpectedGraduationDate' => $this->expected_graduation_date,
                'OverallGPA' => $this->overall_gpa,
                'MajorGPA' => $this->major_gpa,
                'CompletedCourses' => $this->completed_courses,
                'CurrentCourses' => $this->current_courses,
                'FavoriteSubjects' => $this->favorite_subjects,
                'LeastFavoriteSubjects' => $this->least_favorite_subjects,
                'TechnicalSkills' => $this->technical_skills,
                'SoftSkills' => $this->soft_skills,
                'Certifications' => $this->certifications,
                'Projects' => $this->projects,
                'Internships' => $this->internships,
                'ClubsAndOrganizations' => $this->clubs_and_organizations,
                'VolunteerExperience' => $this->volunteer_experience,
                'FeedbackOnCurriculum' => $this->feedback_on_curriculum,
            ]
        );

        session()->flash('message', 'Academic Information saved successfully.');
    }

    public function render()
    {
        return view('livewire.academic-informations');
    }
}
