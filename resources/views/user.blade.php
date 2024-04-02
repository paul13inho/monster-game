@extends('layouts.app')
@include('layouts.navigation')

<form class="login" action="{{route('user-update')}}" method="post">
    @csrf

    <div class="mb-4">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{$user->name}}">
    </div>

    <div class="mb-4">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{$user->email}}">
    </div>

    <div class="mb-4">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>

    <button type="submit">Update</button>
</form>
