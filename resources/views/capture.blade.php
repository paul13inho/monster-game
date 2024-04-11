@extends("layouts.app")

@include('layouts.navigation')

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
    @foreach ($monsters as $monster)
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full h-64 object-contain" src="{{ asset('storage/' . $monster->portrait) }}" alt="Monster Image">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $monster->name }}</div>
                <p class="text-gray-700 text-base">Type: {{ $monster->type }}</p>
                <p class="text-gray-700 text-base">Level: {{ $monster->level }}</p>
                <p class="text-gray-700 text-base">Life: {{ $monster->life }}</p>

                <!-- Display Monster Moves -->
                <div class="mt-4">
                    <div class="text-gray-600">Moves:</div>
                    <ul class="list-disc list-inside text-gray-800">
                        @foreach ($monster->moves as $move)
                            <li>
                                {{ $move->name }} - Attack Power: {{ $move->power }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>





