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

                <h2 class="text-center mb-4">Update Teacher Details</h2>
                <a href="{{ route('Teachers.index') }}" class="btn btn-success">Back Home</a>

                <form class="mb-5" action="{{ route('Teachers.update', $teacher->id) }}"
                    method="POST">

                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="name" class="form-label">Teacher Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $teacher->name }}"
                            placeholder="Enter Teacher Name">
                        @error("name")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject:</label>
                        <input type="text" class="form-control" value="{{ $teacher->subject }}" name="subject"
                            placeholder="Enter the Subject">
                        @error("subject")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age:</label>
                        <input type="number" class="form-control" name="age" value="{{ $teacher->age }}"
                            placeholder="Enter the Age">
                        @error("age")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="degree" class="form-label">Degree:</label>
                        <input type="text" class="form-control" name="degree" value="{{ $teacher->degree }}"
                            placeholder="Enter the Degree">
                        @error("degree")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Address:</label>
                        <input type="text" class="form-control" name="address" value="{{ $teacher->address }}"
                            placeholder="Enter the Address">
                        @error("address")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
