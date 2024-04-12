@extends('layouts.app')
@include('layouts.navigation')

<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Move Creation</h1>

    <form action="{{route('monster.move-create')}}" method="post" class="move-form">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" id="name" name="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="lvl" class="block text-gray-700 font-bold mb-2">Level:</label>
            <input type="number" id="lvl" name="lvl" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="type" class="block text-gray-700 font-bold mb-2">Type:</label>
            <select id="type" name="type" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="grass">Grass</option>
                <option value="fire">Fire</option>
                <option value="water">Water</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="attack" class="block text-gray-700 font-bold mb-2">Attack Point:</label>
            <input type="number" id="attack" name="attack" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Move</button>
    </form>
</div>
