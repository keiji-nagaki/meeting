<!-- resources/views/tweet/create.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('明日の予定を登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('schedule.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <x-input-label for="subject" :value="__('工事件名')" />
              <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject')" required autofocus />
              <x-input-error :messages="$errors->get('subject')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="date" :value="__('月日')" />
              <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autofocus />
              <x-input-error :messages="$errors->get('date')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="schedule" :value="__('明日の予定')" />
              <x-text-input id="schedule" class="block mt-1 w-full" type="text" name="schedule" :value="old('schedule')" required autofocus />
              <x-input-error :messages="$errors->get('schedule')" class="mt-2" />
            </div>
             <div class="flex flex-col mb-4">
              <x-input-label for="contact" :value="__('連絡事項')" />
              <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" required autofocus />
              <x-input-error :messages="$errors->get('contact')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3">
                {{ __('登録') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

