@extends('dashboard')

@section('content')
    <!-- Main -->
    <main>
        <div class="container mt-5 d-flex justify-content-center">
            <div class="border border-2 border-dark p-5" style="max-width: 500px; width: 100%">
                <h1 class="text-center fs-5 mb-4">Màn hình đăng ký</h1>
                <form action="{{ route('user.postRegisterUser') }}" method="POST">
                    @csrf
                    <div class="mb-4 row align-items-center">
                        <label for="username" class="col-sm-3 form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control p-1 border border-dark rounded-0" name="name"
                                id="username" required placeholder="Nhập username" />
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
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
                        <label for="password_confirmation" class="col-sm-3 form-label">Nhập lại mật khẩu</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control p-1 border border-dark rounded-0"
                                name="password_confirmation" id="password_confirmation" required
                                placeholder="Nhập lại mật khẩu" />
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="d-flex align-items-center mt-5">
                        <a class="ms-auto me-4 text-decoration-none" href="{{ route('login') }}">Đã có tài khoản</a>
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
