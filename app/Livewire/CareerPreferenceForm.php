<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CareerPreference;

class CareerPreferenceForm extends Component
{
    public $studentId;
    public $preferredITSpecializations;
    public $careerGoals;
    public $shortTermGoals;
    public $longTermGoals;
    public $preferredIndustries;
    public $preferredJobRoles;
    public $willingnessToRelocate;
    public $preferredWorkEnvironment;
    public $workLifeBalancePreference;
    public $preferredMethodOfRecommendations;
    public $additionalComments;

    protected $rules = [
        'studentId' => 'required|integer|exists:personal_information,StudentID',
        'preferredITSpecializations' => 'nullable|string',
        'careerGoals' => 'nullable|string',
        'shortTermGoals' => 'nullable|string',
        'longTermGoals' => 'nullable|string',
        'preferredIndustries' => 'nullable|string',
        'preferredJobRoles' => 'nullable|string',
        'willingnessToRelocate' => 'nullable|boolean',
        'preferredWorkEnvironment' => 'nullable|string',
        'workLifeBalancePreference' => 'nullable|string|max:255',
        'preferredMethodOfRecommendations' => 'nullable|string|max:255',
        'additionalComments' => 'nullable|string',
    ];

    public function mount($studentId)
    {
        $this->studentId = (int) $studentId;
    }

    public function save()
    {
        $this->validate();

        CareerPreference::updateOrCreate(
            ['StudentID' => $this->studentId],
            [
                'PreferredITSpecializations' => $this->preferredITSpecializations,
                'CareerGoals' => $this->careerGoals,
                'ShortTermGoals' => $this->shortTermGoals,
                'LongTermGoals' => $this->longTermGoals,
                'PreferredIndustries' => $this->preferredIndustries,
                'PreferredJobRoles' => $this->preferredJobRoles,
                'WillingnessToRelocate' => $this->willingnessToRelocate,
                'PreferredWorkEnvironment' => $this->preferredWorkEnvironment,
                'WorkLifeBalancePreference' => $this->workLifeBalancePreference,
                'PreferredMethodOfRecommendations' => $this->preferredMethodOfRecommendations,
                'AdditionalComments' => $this->additionalComments,
            ]
        );

        session()->flash('message', 'Career preferences saved successfully.');
    }

    public function render()
    {
        return view('livewire.career-preference-form');
    }
}
