<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>
    

    
     <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
               
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                 <x-nav-link :href="route('separate.index')" :active="request()->routeIs('separate.index')"> {{ __('協力企業はこちらへ') }} </x-nav-link>
                        </div>
                    </div>
                </div>
                 <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <x-nav-link :href="route('separate.create')" :active="request()->routeIs('separate.create')">{{ __('事業主はこちらへ') }}</x-nav-link>
                            </div>
                        </div>

                    </div>
                </div>
                
     </div>
     
     
</x-app-layout>
