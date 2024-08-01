<div class="container mx-auto p-4">
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="bg-white p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <x-label for="current_degree_program" value="{{ __('Current Degree Program') }}" />
            <x-input id="current_degree_program" type="text" wire:model="current_degree_program" class="block mt-1 w-full" />
        </div>

        <div class="mb-4">
            <x-label for="year_of_study" value="{{ __('Year of Study') }}" />
            <x-input id="year_of_study" type="text" wire:model="year_of_study" class="block mt-1 w-full" />
        </div>

        <div class="mb-4">
            <x-label for="expected_graduation_date" value="{{ __('Expected Graduation Date') }}" />
            <x-input id="expected_graduation_date" type="date" wire:model="expected_graduation_date" class="block mt-1 w-full" />
        </div>

        <div class="mb-4">
            <x-label for="overall_gpa" value="{{ __('Overall GPA') }}" />
            <x-input id="overall_gpa" type="number" step="0.01" wire:model="overall_gpa" class="block mt-1 w-full" />
        </div>

        <div class="mb-4">
            <x-label for="major_gpa" value="{{ __('Major GPA') }}" />
            <x-input id="major_gpa" type="number" step="0.01" wire:model="major_gpa" class="block mt-1 w-full" />
        </div>

        <div class="mb-4">
            <x-label for="completed_courses" value="{{ __('Completed Courses') }}" />
            <textarea id="completed_courses" wire:model="completed_courses" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <x-label for="current_courses" value="{{ __('Current Courses') }}" />
            <textarea id="current_courses" wire:model="current_courses" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <x-label for="favorite_subjects" value="{{ __('Favorite Subjects') }}" />
            <textarea id="favorite_subjects" wire:model="favorite_subjects" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <x-label for="least_favorite_subjects" value="{{ __('Least Favorite Subjects') }}" />
            <textarea id="least_favorite_subjects" wire:model="least_favorite_subjects" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <x-label for="technical_skills" value="{{ __('Technical Skills') }}" />
            <textarea id="technical_skills" wire:model="technical_skills" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <x-label for="soft_skills" value="{{ __('Soft Skills') }}" />
            <textarea id="soft_skills" wire:model="soft_skills" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <x-label for="certifications" value="{{ __('Certifications') }}" />
            <textarea id="certifications" wire:model="certifications" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <x-label for="projects" value="{{ __('Projects') }}" />
            <textarea id="projects" wire:model="projects" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <x-label for="internships" value="{{ __('Internships') }}" />
            <textarea id="internships" wire:model="internships" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <x-label for="clubs_and_organizations" value="{{ __('Clubs and Organizations') }}" />
            <textarea id="clubs_and_organizations" wire:model="clubs_and_organizations" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <x-label for="volunteer_experience" value="{{ __('Volunteer Experience') }}" />
            <textarea id="volunteer_experience" wire:model="volunteer_experience" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <x-label for="feedback_on_curriculum" value="{{ __('Feedback on Curriculum') }}" />
            <textarea id="feedback_on_curriculum" wire:model="feedback_on_curriculum" class="block mt-1 w-full p-2 border rounded-md"></textarea>
        </div>

        <div class="mt-4">
            <x-button type="submit" class="w-full">
                {{ __('Save') }}
            </x-button>
        </div>
    </form>
</div>
