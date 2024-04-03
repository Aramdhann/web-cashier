<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('components.style', ['title'=>'Sign In'])
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-body-tertiary">
        <div class="card login rounded-4 p-3">
            <div class="card-body">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img src="{{ url('assets/images/logo.png') }}" alt="logo kasir" style="width: 32px">
                    <h4 class="fw-bold mt-2">Sign In</h4>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="mb-2">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Masukkan Alamat Email" required autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="mb-2">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Masukkan Kata Sandi" autofocus>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary d-flex w-100 justify-content-center">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
