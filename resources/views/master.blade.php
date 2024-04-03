@extends("layouts.app")

@include('layouts.navigation')



<main class="flex gap-6 w-4/5 mx-auto mt-16 text-center justify-center">
    <a href="{{ route('create-monster-index') }}" class="flex flex-col justify-center bg-blue-500 rounded-lg p-4 cursor-pointer hover:bg-blue-600 transition duration-300 w-32 h-32">
        <i class="fa-solid fa-spaghetti-monster-flying text-4xl text-white mb-2"></i>
        <h1 class="text-white text-lg">Monster</h1>
    </a>

    <a href="{{route('create-move-index')}}" class="flex flex-col justify-center bg-yellow-500 rounded-lg p-4 cursor-pointer hover:bg-yellow-600 transition duration-300 w-32 h-32">
        <i class="fa-solid fa-hand-fist text-4xl text-white mb-2"></i>
        <h1 class="text-white text-lg">Move</h1>
    </a>
</main>


