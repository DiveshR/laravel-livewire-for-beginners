<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>
    @if($success)
    <div x-data="{ show: true }" x-init="setTimeout(() => { show = false }, 2000)"
        x-show.transition.duration.500ms="show"
        class="bg-green-500 text-white p-4 mb-4">
        Profile Updated Successfully...
   </div>
    @endif
    <form wire:submit.prevent="submit" class="mt-6 space-y-6">
        @csrf
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" wire:model="name" type="text" class="mt-1 block w-full"  required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" wire:model="email" type="email" class="mt-1 block w-full"  required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

        </div>
        {{-- <div class="flex items-center gap-4"> --}}
                   <x-primary-button>{{ __('Save') }}</x-primary-button>
        {{-- </div> --}}
        {{-- <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div> --}}
    </form>
</section>