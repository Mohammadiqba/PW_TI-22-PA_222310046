@extends('students.layouts.index')

@section('main-content')
    <div class="mt-3">
        <a href="/" class="text-decoration-none">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
    </div>

    <div class="card mt-4">
        <div class="card-header fw-bold ">
            <h4>Edit Student</h4>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/update/{{ $students->id }}/edit" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">fullName</label>
                    <input type="text" fullname="fullname" class="form-control @error('fullname') is-invalid @enderror"
                        id="fullname" autocomplete="off" value="{{ old('fullname', $students->fullname) }}">
                    @error('fullname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="npm" class="form-label">npm</label>
                    <textarea name="npm" class="form-control @error('npm') is-invalid @enderror" id="npm"
                        rows="3">{{ old('description', $students->npm) }}</textarea>
                    @error('npm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="email" class="form-label">email</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">email</span>
                    <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"
                        id="price" autocomplete="off" value="{{ old('email', $students->email) }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">prodi</label>
                    <input type="text" prodi="prodi" class="form-control @error('prodi') is-invalid @enderror"
                        id="prodi" autocomplete="off" value="{{ old('prodi', $students->prodi) }}">
                    @error('prodi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
