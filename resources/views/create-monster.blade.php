@extends('layouts.app')
@include('layouts.navigation')

<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Monster Creation</h1>

    <form action="" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <input type="number" id="level" name="level" hidden value="1">

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" id="name" name="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
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
            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
            <textarea id="description" name="description" rows="4" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>

        <div class="mb-4">
            <label for="moves" class="block text-gray-700 font-bold mb-2">Moves:</label>
            <select id="moves" name="moves[]" required multiple size="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="grass">Grass</option>
                <option value="fire">Fire</option>
                <option value="water">Water</option>
            </select>
        </div>


        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Monster</button>
    </form>
</div>
