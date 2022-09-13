<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

       <!-- Styles -->
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        @csrf
        @method('PUT')
        <div class="container mt-5 ">
        <h5 class="card-title">Edit Users Details</h5>
            <div class="row mt-3">
                <div class="col-md-6 col-lg-6">
                    <div class="mb-3">
                    <input type="text" class="form-control" value="{{$editpage->name}}" name="name"  aria-label="name">
                    </div>
                        <div class="mb-3">
                    <input type="text" class="form-control" value="{{$editpage->email}}" name="email"  aria-label="email">

                    </div>
                

                     <input type="submit">
                </div>
            </div>
        </div>


    </form>

</body>

</html>