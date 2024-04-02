<nav class="bg-gray-900 p-4 flex justify-between items-center">
    <p class="text-white">Welcome, {{ $user->name }}</p>

    <div class="space-x-2">

        {{--Dashboard icon--}}
        <a href="{{route('dashboard')}}" class="text-white" title="Dashboard">
            <i class="fa-solid fa-bars"></i>
        </a>

        {{--User icon--}}
        <a href="{{route('user-index')}}" class="text-white" title="User">
            <i class="fa-solid fa-user"></i>
        </a>

        {{--Logout icon--}}
        <a href="{{route('logout')}}" class="text-white" title="Logout">
            <i class="fa-solid fa-right-from-bracket"></i>
        </a>
    </div>
</nav>
