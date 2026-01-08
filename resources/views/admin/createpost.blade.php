<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             @if(Auth::check() && Auth::user()->usertype == 'admin')
                {{ __('Admin Dashboard') }}
            @else
            {{ __('Dashboard') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <form action="">
                        <input type="text" placeholder="Title" class="border-2 mb-4 p-2 w-full"/>
                        <input type="text" placeholder="Title" class="border-2 mb-4 p-2 w-full"/>
                        <input type="text" placeholder="Title" class="border-2 mb-4 p-2 w-full"/>
                        <input type="text" placeholder="Title" class="border-2 mb-4 p-2 w-full"/>
                        <input type="text" placeholder="Title" class="border-2 mb-4 p-2 w-full"/>
                        <input type="text" placeholder="Title" class="border-2 mb-4 p-2 w-full"/>
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
