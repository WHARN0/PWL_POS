@extends('layouts.app')

{{-- Customize layout sections --}}
@section('title', 'Create Level')
@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Create')
@section('content')
    <div class="card-body">
        <div class="form-group">
            <label for="kode_level">Level Kode</label>
            <input type="text" class="form-control" id="kode_level" name="kode_level" placeholder="Masukkan Level Kode">
        </div>
        <div class="form-group">
            <label for="nama_level">Level Nama</label>
            <input type="text" class="form-control" id="nama_level" name="nama_level" placeholder="Masukkan Level Nama">
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection
