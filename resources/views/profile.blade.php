<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-4">Users</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                            <div class="container">
                            
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <a class="navbar-brand" href="#">   CR7
                                        </a>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="index">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('profile')}}">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('information')}}">Information</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <tbody>
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>bio</td>
                            </tr>
                            @forelse ($profiles as $profile)
                                <tr>
                                    <td>{{ $profile->id }}</td>
                                    <td>{{ $profile->name }}</td>
                                    <td>{{ $profile->email }}</td>
                                    <td>{{ $profile->bio}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No profiles available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{$profiles->links()}}
    </div>

</body>
</html>
