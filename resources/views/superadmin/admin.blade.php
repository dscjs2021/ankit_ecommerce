<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



</head>

<body class="mt-5">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form action="{{route('superadminindex')}}" method="post">
                            <h5 class="card-title">All Users Details</h5>

                            <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getalldata as $i)
                                    @if($i->role == 0)
                                    <tr>
                                        <td>{{$i->id}}</td>
                                        <td>{{$i->name}}</td>
                                        <td>{{$i->email}}</td>
                                        <td>
                                            @if($i->status==1)
                                            <a href="{{url('changestatus/'.$i->id)}}" class="btn btn-sm btn-light"  name="active" >Active</button>                                           
                                            @else
                                            <a href="{{url('changestatus/'.$i->id)}}" class="btn btn-sm btn-dark"  name="inactive" >Inactive</button>                                           
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('delete/'.$i->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                            <a href="{{url('edit/'.$i->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach

                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- data table -->


    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>