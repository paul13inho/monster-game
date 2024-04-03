@extends("layouts.app")

@include('layouts.navigation')



<main class="grid grid-cols-3 gap-6 w-4/5 mx-auto mt-16 text-center">
    <a href="/start-journey" class="flex flex-col items-center justify-center bg-blue-500 rounded-lg p-4 cursor-pointer hover:bg-blue-600 transition duration-300 w-32 h-32">
        <i class="fas fa-play text-4xl text-white mb-2"></i>
        <h1 class="text-white text-lg">Start Journey</h1>
    </a>

    <a href="/capture" class="flex flex-col items-center justify-center bg-green-500 rounded-lg p-4 cursor-pointer hover:bg-green-600 transition duration-300 w-32 h-32">
        <i class="fas fa-bullseye text-4xl text-white mb-2"></i>
        <h1 class="text-white text-lg">Capture</h1>
    </a>

    <a href="/battle" class="flex flex-col items-center justify-center bg-yellow-500 rounded-lg p-4 cursor-pointer hover:bg-yellow-600 transition duration-300 w-32 h-32">
        <i class="fas fa-user-shield text-4xl text-white mb-2"></i>
        <h1 class="text-white text-lg">Battle</h1>
    </a>

    <a href="/monsterdex" class="flex flex-col items-center justify-center bg-purple-500 rounded-lg p-4 cursor-pointer hover:bg-purple-600 transition duration-300 w-32 h-32">
        <i class="fas fa-book text-4xl text-white mb-2"></i>
        <h1 class="text-white text-lg">Monsterdéx</h1>
    </a>

    <a href="/team" class="flex flex-col items-center justify-center bg-red-500 rounded-lg p-4 cursor-pointer hover:bg-red-600 transition duration-300 w-32 h-32">
        <i class="fas fa-people-carry text-4xl text-white mb-2"></i>
        <h1 class="text-white text-lg">Team</h1>
    </a>

    @auth
        @if(auth()->user()->email === 'admin@gmail.com')
            <a href="{{ route('master-index') }}" class="flex flex-col items-center justify-center bg-indigo-500 rounded-lg p-4 cursor-pointer hover:bg-indigo-600 transition duration-300 w-32 h-32">
                <i class="fas fa-plus text-4xl text-white mb-2"></i>
                <h1 class="text-white text-lg">Master</h1>
            </a>
        @endif
    @endauth
</main>

