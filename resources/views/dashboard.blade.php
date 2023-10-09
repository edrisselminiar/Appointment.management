<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
            
        </h2>
    </x-slot>
{{-- 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="form-group">
                        <label for="téléphone">téléphone</label>
                        <input type="text" name="téléphone" id="téléphone" 
                        value="{{ $appointments->téléphone }}" 
                        class="form-control" required readonly>
                    </div>
                
                    <div class="form-group">
                        <label for="cin">National Number</label>
                        <input type="text" name="cin" id="cin" class="form-control" 
                        value="{{ $appointments->cin }}" 
                        required readonly>
                    </div>
                </div> --}}


                {{-- @foreach ($appointments as $appointment)
    <p>{{ $appointment->prenom }}</p>
    <p>{{ $appointment->cin }}</p> --}}
    <!-- Display other appointment details as needed -->
{{-- @endforeach --}}
            </div>
        </div>
    </div>
    
</x-app-layout>
