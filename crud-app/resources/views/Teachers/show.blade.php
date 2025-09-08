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

                <h2 class="text-center mb-4"> Teacher Details </h2>


                <form class="mb-5" method="POST">

                    <div class="mb-3">
                        <label for="id" class="form-label">ID:</label>
                        <input type="number" class="form-control" name="id" value="{{ $teacher->id }}">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Teacher Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $teacher->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject:</label>
                        <input type="text" class="form-control" name="subject" value="{{ $teacher->subject }}">

                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age:</label>
                        <input type="number" class="form-control" name="age" value="{{ $teacher->age }}">
                    </div>

                    <div class="mb-3">
                        <label for="degree" class="form-label">Degree:</label>
                        <input type="text" class="form-control" name="degree" value="{{ $teacher->degree }}">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Address:</label>
                        <input type="text" class="form-control" name="address" value="{{ $teacher->address }}">
                    </div>


                    <a href="{{ route('Teachers.index') }}" class="btn btn-success">Back Home</a>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
