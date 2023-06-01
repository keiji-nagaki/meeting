<!-- resources/views/tweet/edit.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('実績表の修正') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('result.update',$result->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="flex flex-col mb-4">
              <x-input-label for="subject" :value="__('工事件名')" />
              <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject" value="{{$result->subject}}" required autofocus />
              <x-input-error :messages="$errors->get('subject')" class="mt-2" />
            </div>
             <div class="flex flex-col mb-4">
              <x-input-label for="date" :value="__('月日')" />
              <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" value="{{$result->date}}" required autofocus />
              <x-input-error :messages="$errors->get('subject')" class="mt-2" />
            </div>
             <div class="flex flex-col mb-4">
              <x-input-label for="result" :value="__('工事実績')" />
              <x-text-input id="result" class="block mt-1 w-full" type="text" name="result" value="{{$result->result}}" required autofocus />
              <x-input-error :messages="$errors->get('result')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="number_of_people" :value="__('作業員数')" />
              <x-text-input id="number_of_people" class="block mt-1 w-full" type="text" name="number_of_people" value="{{$result->number_of_people}}" required autofocus />
              <x-input-error :messages="$errors->get('number_of_people')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="overtime" :value="__('本日の残業')" />
              <x-text-input id="overtime" class="block mt-1 w-full" type="text" name="overtime" value="{{$result->overtime}}" required autofocus />
              <x-input-error :messages="$errors->get('overtime')" class="mt-2" />
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

