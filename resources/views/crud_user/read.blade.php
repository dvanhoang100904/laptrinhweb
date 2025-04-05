@extends('dashboard')

@section('content')
    <!-- Main -->
    <main>
        <div class="container mt-5 d-flex justify-content-center">
            <div class="border border-2 border-dark p-5" style="max-width: 500px; width: 100%">
                <h1 class="text-center fs-5 mb-4">Màn hình chi tiết</h1>
                <div class="mb-3 row align-items-center">
                    <label class="col-sm-3 form-label">Id</label>
                    <div class="col-sm-9 d-flex">
                        <p class="text-dark fw-bold">{{ $user->id }}</p>
                    </div>
                </div>
                <div class="mb-3 row align-items-center">
                    <label class="col-sm-3 form-label">Name</label>
                    <div class="col-sm-9 d-flex">
                        <p class="text-dark fw-bold">{{ $user->name }}</p>
                    </div>
                </div>
                <div class="mb-3 row align-items-center">
                    <label class="col-sm-3 form-label">Email</label>
                    <div class="col-sm-9">
                        <p class="text-dark fw-bold">{{ $user->email }}</p>
                    </div>
                </div>
                <div class="mb-3 row align-items-center">
                    <label class="col-sm-3 form-label">Phone</label>
                    <div class="col-sm-9">
                        <p class="text-dark fw-bold">{{ $user->phone }}</p>
                    </div>
                </div>
                <div class="mb-3 row align-items-center">
                    <label class="col-sm-3 form-label">Address</label>
                    <div class="col-sm-9">
                        <p class="text-dark fw-bold">{{ $user->address }}</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-5">
                    <a class="ms-auto me-4 text-decoration-none" href="{{ route('user.list') }}">Quay lại</a>
                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Chỉnh
                        sửa</a>
                </div>
            </div>
        </div>
    </main>
@endsection
