<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <h2 class="text-center mb-4">Teachers List</h2>
                <a href="{{ route('Teachers.create') }}" class="btn btn-success">Add Teacher</a>

                <table class="table table-bordered table-striped text-center mt-5">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Age</th>
                            <th>Degree</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        </tr>
                        @foreach( $teachers as $teacher )


                            <tr>
                                <td>{{ $teacher->id }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->subject }}</td>
                                <td>{{ $teacher->age }}</td>
                                <td>{{ $teacher->degree }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td>
                                    <a href="{{ route('Teachers.show', $teacher->id) }}"
                                        class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('Teachers.edit', $teacher->id) }}"
                                        class="btn btn-primary btn-sm">update</a>

                                    <form
                                        action="{{ route('Teachers.destroy', $teacher->id) }}"
                                        method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this teacher?')">
                                            Delete
                                        </button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
