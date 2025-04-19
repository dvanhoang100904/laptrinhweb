@extends('dashboard')

@section('content')
    <!-- Main -->
    <main>
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
                            <th class="text-center">Action</th>
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
                                        <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                            {{ $role->name . '-' }}
                                        </a>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}"
                                        class="btn btn-sm btn-success">Edit</a>
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}"
                                        class="btn btn-sm btn-warning">View</a>
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}

        </div>
    </main>
@endsection
