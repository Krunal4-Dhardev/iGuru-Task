<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <br><br>
            <form action="/addData">
                <input type="submit" class="btn btn-primary" value="Add Data">
            </form>

            <div class="data">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Email</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">PortFolio</th>
                        <th scope="col">Date Of Birth</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>  
                        <th scope="col">Action</th>                     
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->username}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->first_name}}</td>
                                <td>{{$item->last_name}}</td>
                                <td>{{$item->gender}}</td>
                                <td>{{$item->mobile}}</td>
                                <td>{{$item->portfolio}}</td>
                                <td>{{$item->dob}}</td>
                                <td>{{$item->start_date}}</td>
                                <td>{{$item->end_date}}</td>
                                <td><a href="/edit/{{$item->id}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                   Edit
                                  </button></a>
                                    <a href="delete/{{$item->id}}" class="btn btn-warning">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
        </div>
    </body>
</html>