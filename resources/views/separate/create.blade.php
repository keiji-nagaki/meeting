<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>
    

    
     <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
               
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                            　 <x-nav-link :href="route('main_user.create')" :active="request()->routeIs('main_user.create')">{{ __('協力企業への連絡事項の入力') }}</x-nav-link>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    連絡事項を入力して下さい
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2"> 
                       <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <x-nav-link :href="route('main_usersearch.input')" :active="request()->routeIs('main_userschedulesearch.input')">{{ __('協力企業への連絡事項') }}</x-nav-link>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    入力した日付の連絡事項を表示します。
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center">
                                 <x-nav-link :href="route('main_user.index')" :active="request()->routeIs('main_user.index')">{{ __('協力企業への連絡事項一覧') }}</x-nav-link>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    これまでの連絡事項が一覧表示されます
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
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                            　  <x-nav-link :href="route('document.create')" :active="request()->routeIs('document.create')">{{ __('入所関係資料登録') }}</x-nav-link>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    資料の登録ができます
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

     </div>            
</x-app-layout>
