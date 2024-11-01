@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <form action="">
        <h1 class="mb-3">Register</h1>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan email address">
        </div>
        <div class="mb-3">
            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Masukkan password">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-100" style="max-width: 200px;">Register</button>
        </div>
    </form>
@endsection
