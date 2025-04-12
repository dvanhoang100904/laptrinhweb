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
                            <th class="text-center">Phone</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Like</th>
                            <th class="text-center">Github</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->like }}</td>
                                <td>{{ $user->github }}</td>
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

            <nav aria-label="Page navigation example " class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
@endsection
