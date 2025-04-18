@extends('dashboard')

@section('content')
    <!-- Main -->
    <main>
        <div class="container mt-5 d-flex justify-content-center">
            <div class="border border-2 border-dark p-5" style="max-width: 500px; width: 100%">
                <h1 class="text-center fs-5 mb-4">Màn hình đăng nhập</h1>
                <form action="{{ route('user.authUser') }}" method="POST">
                    @csrf
                    <div class="mb-3 row align-items-center">
                        <label for="email" class="col-sm-3 form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control p-1 border border-dark rounded-0" name="email"
                                id="email" required placeholder="Nhập email" />
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row align-items-center">
                        <label for="password" class="col-sm-3 form-label">Mật khẩu</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control p-1 border border-dark rounded-0" name="password"
                                id="password" required placeholder="Nhập mật khẩu" />
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row align-items-center">
                        <label class="col-sm-3 form-label"></label>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input type="checkbox"
                                    class="form-check-input border border-secondary bg-secondary rounded-0"
                                    id="rememberMe" />
                                <label class="form-check-label" for="rememberMe">Ghi nhớ đăng nhập</label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mt-5">
                        <a class="ms-auto me-4 text-decoration-none" href="#">Quên mật khẩu</a>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
