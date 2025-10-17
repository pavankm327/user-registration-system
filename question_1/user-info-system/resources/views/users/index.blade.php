@extends('layouts.app')

@push('styles')
    <style>
        .danger {
            color: red;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <h2> User Information System </h2>

        <form action="{{ route('users.store')}}" method="post">
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name')}}">
            @error('name')
                <span class="danger">{{ $message }} </span>
            @enderror
            <br> 

            <label for="name">Email</label>
            <input type="email" name="email" value="{{ old('email')}}">
            @error('email')
                <span class="danger">{{ $message }} </span>
            @enderror
            <br>

            <label for="name">Username</label>
            <input type="text" name="username" value="{{ old('username')}}">
            @error('username')
                <span class="danger">{{ $message }} </span>
            @enderror
            <br>

            <label for="name">Password</label>
            <input type="password" name="password">
            @error('password')
                <span class="danger">{{ $message }} </span>
            @enderror
            <br>

            <button type="submit">Register</button>
            
        </form>
    </div>
@endSection