@extends('layouts.app',['title' => 'Edit User'])

@section('content')
    <form method="post" action="{{ route('users.update',$user->id) }}" class="mt-6 space-y-6" method="POST">
        @csrf
        <div>
            <x-input-label for="name" :value="__('First Name')" />
            <x-text-input id="name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $user->first_name)" required
                autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
        </div>
        <div>
            <x-input-label for="name" :value="__('Last Name')" />
            <x-text-input id="name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $user->last_name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
        </div>
        <div>
            <x-input-label for="name" :value="__('Occupation')" />
            <x-text-input id="name" name="occupation" type="text" class="mt-1 block w-full" :value="old('occupation', $user->occupation)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('occupation')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Update') }}</x-primary-button>
        </div>
    </form>
@endsection
