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
                        <p class="text-dark fw-bold">{{ $role->id }}</p>
                    </div>
                </div>
                <div class="mb-3 row align-items-center">
                    <label class="col-sm-3 form-label">Name</label>
                    <div class="col-sm-9 d-flex">
                        <p class="text-dark fw-bold">{{ $role->name }}</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-5">
                    <a class="ms-auto me-4 text-decoration-none" href="{{ route('user.list') }}">Quay lại</a>
                </div>
            </div>
        </div>

        {{-- list user --}}

        <div class="container mt-5">
            <h1 class="text-center fs-5 mb-4">Danh sách user</h1>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Roles</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $role)
                                        {{ $role->name }}
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
