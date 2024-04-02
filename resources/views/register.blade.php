@extends('layouts.app')

<form class="login" action="{{route('register-user')}}" method="post">
    @csrf
    <div class="mb-4">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
    </div>

    <div class="mb-4">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>

    <div class="mb-4">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>

    <button type="submit">Register</button>
</form>
