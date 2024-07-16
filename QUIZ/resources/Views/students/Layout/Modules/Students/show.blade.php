@extends('students.layouts.index')

@section('main-content')
    <div class="mt-3">
        <a href="/" class="text-decoration-none ">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
        <div class="name mt-4">
            <span class="text-secondary">fullname :</span>
            <h2>{{ $data->fullname }}</h2>
        </div>
        <div class="desc mt-4">
            <span class="text-secondary">npm :</span>
            <h2>{{ $data->npm }}</h2>
        </div>
        <div class="price mt-4">
            <span class="text-secondary">email :</span>
            <h2>Rp {{ $data->email }}</h2>
        </div>
        <div class="price mt-4">
            <span class="text-secondary">Prodi :</span>
            <h2>Rp {{ $data->prodi }}</h2>
        </div>
    </div>
@endsection
