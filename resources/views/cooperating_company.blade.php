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
                            <div class="flex items-center">
                                  <x-nav-link :href="route('result.create')" :active="request()->routeIs('result.create')">{{ __('作業実績の入力') }}</x-nav-link>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    本日の作業実績を入力ください
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center">
                                  <x-nav-link :href="route('schedule.create')" :active="request()->routeIs('schedule.create')">{{ __('予定の入力') }}</x-nav-link>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    明日の作業予定を入力ください
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                            　 <x-nav-link :href="route('result.mypage')" :active="request()->routeIs('result.mypage')">{{ Auth::user()->name }}{{ __('の作業実績') }}</x-nav-link>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    これまでの作業実績を確認することができます
                                </div>
                            </div>
                        </div>
                         <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <x-nav-link :href="route('schedule.mypage')" :active="request()->routeIs('schedule.mypage')">{{ Auth::user()->name }}{{ __('の作業予定') }}</x-nav-link>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    これまでの予定表を確認することができます
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                 <x-nav-link :href="route('search.input')" :active="request()->routeIs('search.input')">{{ __('実績表') }}</x-nav-link>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    協力企業の本日の実績を確認することができます
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                            　 <x-nav-link :href="route('schedulesearch.input')" :active="request()->routeIs('schedulesearch.input')">{{ __('予定表') }}</x-nav-link>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    協力企業の明日の作業予定を確認することができます
                                </div>
                            </div>
                        </div>
                   
                        <div class="p-6">
                            <div class="flex items-center">
                                  <x-nav-link :href="route('main_usersearch.input')" :active="request()->routeIs('main_userschedulesearch.input')">{{ __('事業主からの連絡事項') }}</x-nav-link>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    事業主からの連絡事項を確認できます
                                </div>
                            </div>
                        </div>
                　  </div>
                </div>
     </div>            
</x-app-layout>
