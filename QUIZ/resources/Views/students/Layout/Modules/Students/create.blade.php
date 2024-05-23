<div class="card">
    <div class="card-header fw-bold ">
        Create Products
    </div>
    <div class="card-body">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="fullname" class="form-label">fullName</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="name" autocomplete="off">
                @error('fullname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="npm" class="form-label">npm</label>
                <textarea name="npm" class="form-control @error('npm') is-invalid @enderror" id="desc"
                    rows="3"></textarea>
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
                    id="email" autocomplete="off">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">prodi</label>
                <input type="text" name="prodi" class="form-control @error('prodi') is-invalid @enderror"
                    id="prodi" autocomplete="off">
                @error('prodi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mt-3 mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
</div>
