@extends('layouts.app')

<form class="login" action="{{route('home.login')}}" method="post">
    @csrf
    <div class="mb-4">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>

    <div class="mb-4">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>

    <button type="submit">Log In</button>
</form>
