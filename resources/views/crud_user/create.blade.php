@extends('dashboard')

@section('content')
    <!-- Main -->
    <main>
        <div class="container mt-5 d-flex justify-content-center">
            <div class="border border-2 border-dark p-5" style="max-width: 500px; width: 100%">
                <h1 class="text-center fs-5 mb-4">Màn hình thêm</h1>
                <form action="{{ route('user.postCreateUser') }}" method="POST">
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
                        <label for="phone" class="col-sm-3 form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control p-1 border border-dark rounded-0" name="phone"
                                id="phone" required pattern="[0-9]{10,12}" placeholder="Nhập số điện thoại" />
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="address" class="col-sm-3 form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control p-1 border border-dark rounded-0" name="address"
                                id="address" placeholder="Nhập địa chỉ" />
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="like" class="col-sm-3 form-label">Like</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control p-1 border border-dark rounded-0" name="like"
                                id="like" required placeholder="Nhập sở thích" />
                            @if ($errors->has('like'))
                                <span class="text-danger">{{ $errors->first('like') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="github" class="col-sm-3 form-label">Github</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control p-1 border border-dark rounded-0" name="github"
                                id="github" placeholder="Nhập github" />
                            @if ($errors->has('github'))
                                <span class="text-danger">{{ $errors->first('github') }}</span>
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
                    <div class="d-flex align-items-center mt-5">
                        <a class="ms-auto me-4 text-decoration-none" href="{{ route('user.list') }}">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
