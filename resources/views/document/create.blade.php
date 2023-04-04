<!-- resources/views/tweet/create.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('資料の登録') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('document.store') }}" method="POST"enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col mb-4">
              <x-input-label for="document_name" :value="__('資料のタイトル')" />
              <x-text-input id="document_name" class="block mt-1 w-full" type="text" name="document_name" :value="old('document_name')" required autofocus />
              <x-input-error :messages="$errors->get('document_name')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="document" :value="__('資料')" />
              <x-text-input id="document" class="block mt-1 w-full" type="file" name="document" :value="old('document')" required autofocus />
              <x-input-error :messages="$errors->get('document')" class="mt-2" />
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

