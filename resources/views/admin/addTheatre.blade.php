<x-app-layout>
    
    
</x-app-layout>

<form method="POST" action="{{ route('addTheatre') }}">
        @csrf

        <!-- Theatre Name -->
        <div>
            <x-input-label for="name" :value="__('Theatre Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- City ID -->
        <div class="mt-4">
            <x-input-label for="city" :value="__('City')" />
            <x-text-input id="city" class="block mt-1 w-full" type="number" name="city" :value="old('city')" required autocomplete="username" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />

            <x-text-input id="description" class="block mt-1 w-full"
                            type="text"
                            name="description"
                            required  />

        </div>

        <!-- image -->
        <div class="mt-4">
            <x-input-label for="image" :value="__('image url')" />

            <x-text-input id="image" class="block mt-1 w-full"
                            type="text"
                            name="image"
                            required  />

        </div>




        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Add Theatre') }}
            </x-primary-button>
        </div>
    </form>