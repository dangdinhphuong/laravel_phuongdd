<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>users</title>
</head>

<body>
    <a class="btn btn-primary" href="{{ route('adduser') }}">ADD USER</a>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->mail_address }}</td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="page">
            {{ $users->links() }}
        </div>
    </div>

    <style>
        .relative svg {
            display: none;
        }

        .items-center>.justify-between {
            display: none;
        }

        .container>.page {
            text-align: center;
            margin-bottom: 5%;
        }

    </style>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (Session::has('status'))
        <script>
            swal({
                title: "Good job!",
                text: "{{ Session::get('status') }}",
                icon: "success",
                button: "OK!",
            });
        </script>
    @endif
</body>

</html>
