@extends("layouts.app")

@include('layouts.navigation')

<div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-6 justify-items-center p-4">
    @foreach ($monsters as $monster)
        <div class="flex flex-col rounded shadow-lg max-w-sm py-10">
            <div class="overflow-hidden rounded-t">
                <img class="w-full h-64 object-contain" src="{{ asset('storage/' . $monster->portrait) }}" alt="Monster Image">
            </div>
            <div class="flex flex-col justify-between flex-grow p-4">
                <div class="font-bold text-xl mb-2 capitalize">{{ $monster->name }}</div>
                <p class="text-gray-700 text-base">Type: {{ $monster->type }}</p>
                <p class="text-gray-700 text-base">Level: {{ $monster->level }}</p>
                <p class="text-gray-700 text-base">Life: {{ $monster->life }}</p>

                <!-- Display Monster Moves -->
                <div class="mt-4">
                    <div class="text-gray-600">Moves:</div>
                    <ul class="list-disc list-inside text-gray-800">
                        @foreach ($monster->moves as $move)
                            <li class="capitalize">
                                {{ $move->name }} - AP: {{ $move->power }}
                            </li>
                        @endforeach
                        @for ($i = count($monster->moves); $i < 4; $i++)
                            <li class="capitalize">-</li>
                        @endfor
                    </ul>
                </div>
            </div>
            <form action="{{ route('capture-monster') }}" method="POST" class="flex flex-col justify-center mx-10">
                @csrf
                <input type="hidden" name="monster_id" value="{{ $monster->id }}">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Capture
                </button>
            </form>
        </div>
    @endforeach
</div>




