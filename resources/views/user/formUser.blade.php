@extends('layouts.app')

{{-- Customize layout sections --}}
@section('title', 'Create User')
@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Create')
@section('content')

    <div class="card-body">
        <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" class="form-control" id="Username" name="username" placeholder="Masukkan Username">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="Password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

@endsection
