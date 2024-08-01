<div class="container mx-auto p-6">
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="bg-white p-6 rounded-lg shadow-md">
        <!-- Hidden Student ID input -->
        <input type="hidden" wire:model="studentId">

        <div class="mb-4">
            <label for="preferredITSpecializations" class="block text-gray-700">Preferred IT Specializations</label>
            <textarea id="preferredITSpecializations" wire:model="preferredITSpecializations" class="block mt-1 w-full p-2 border rounded-md"></textarea>
            @error('preferredITSpecializations') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="careerGoals" class="block text-gray-700">Career Goals</label>
            <textarea id="careerGoals" wire:model="careerGoals" class="block mt-1 w-full p-2 border rounded-md"></textarea>
            @error('careerGoals') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="shortTermGoals" class="block text-gray-700">Short Term Goals</label>
            <textarea id="shortTermGoals" wire:model="shortTermGoals" class="block mt-1 w-full p-2 border rounded-md"></textarea>
            @error('shortTermGoals') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="longTermGoals" class="block text-gray-700">Long Term Goals</label>
            <textarea id="longTermGoals" wire:model="longTermGoals" class="block mt-1 w-full p-2 border rounded-md"></textarea>
            @error('longTermGoals') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="preferredIndustries" class="block text-gray-700">Preferred Industries</label>
            <textarea id="preferredIndustries" wire:model="preferredIndustries" class="block mt-1 w-full p-2 border rounded-md"></textarea>
            @error('preferredIndustries') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="preferredJobRoles" class="block text-gray-700">Preferred Job Roles</label>
            <textarea id="preferredJobRoles" wire:model="preferredJobRoles" class="block mt-1 w-full p-2 border rounded-md"></textarea>
            @error('preferredJobRoles') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="willingnessToRelocate" class="block text-gray-700">Willingness To Relocate</label>
            <input type="checkbox" id="willingnessToRelocate" wire:model="willingnessToRelocate" class="mt-1">
            @error('willingnessToRelocate') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="preferredWorkEnvironment" class="block text-gray-700">Preferred Work Environment</label>
            <textarea id="preferredWorkEnvironment" wire:model="preferredWorkEnvironment" class="block mt-1 w-full p-2 border rounded-md"></textarea>
            @error('preferredWorkEnvironment') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="workLifeBalancePreference" class="block text-gray-700">Work Life Balance Preference</label>
            <input type="text" id="workLifeBalancePreference" wire:model="workLifeBalancePreference" class="block mt-1 w-full p-2 border rounded-md">
            @error('workLifeBalancePreference') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="preferredMethodOfRecommendations" class="block text-gray-700">Preferred Method Of Recommendations</label>
            <input type="text" id="preferredMethodOfRecommendations" wire:model="preferredMethodOfRecommendations" class="block mt-1 w-full p-2 border rounded-md">
            @error('preferredMethodOfRecommendations') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="additionalComments" class="block text-gray-700">Additional Comments</label>
            <textarea id="additionalComments" wire:model="additionalComments" class="block mt-1 w-full p-2 border rounded-md"></textarea>
            @error('additionalComments') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Save
        </button>
    </form>
</div>
