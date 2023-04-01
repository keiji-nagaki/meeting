<!-- resources/views/tweet/edit.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Edit Tweet') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('main_user.update',$main_user->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="flex flex-col mb-4">
              <x-input-label for="date" :value="__('Tweet')" />
              <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" value="{{$main_user->date}}" required autofocus />
              <x-input-error :messages="$errors->get('date')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="contact_information" :value="__('連絡事項')" />
              <x-text-input id="contact_information" class="block mt-1 w-full" type="text" name="contact_information" value="{{$main_user->contact_information}}" autofocus />
              <x-input-error :messages="$errors->get('contact_information')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
              <a href="{{ url()->previous() }}">
                <x-secondary-button class="ml-3">
                  {{ __('Back') }}
                </x-primary-button>
              </a>
              <x-primary-button class="ml-3">
                {{ __('Update') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

