<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body  style="background-color: cornflowerblue;">
        <div class="header text-center">
            <h1>Edit information
        </div>
        <div class="container shadow-lg p-3 mb-5 bg-white rounded">
            <form action="/update" method="post" enctype="multipart/form-data">
                @csrf
              
                <input type="hidden" name="id_user" value="{{$data->id}}">
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" class="form-control" name="username"id="u_name" value="{{$data->username}}"  >
                </div><br>
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{$data->email}}">
                </div><br>
                <div class="form-group">
                    <label for="Fname">First Name</label>
                    <input type="text" class="form-control" id="f_name" name="f_name"  value="{{$data->first_name}}">
                </div><br>
                <div class="form-group">
                    <label for="Lname">Last Name</label>
                    <input type="text" class="form-control" id="l_name" name="l_name" value="{{$data->last_name}}">
                </div><br>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gen" id="gen">
                        @if($data->gender== 'Male')
                            <option selected>Male</option>                            
                        @else
                        <option>FeMale</option>                            
                        @endif
                    </select>
                </div><br>
                <div class="form-group">
                    <label for="mno">Mobile Number</label>
                    <input type="number" class="form-control" id="mno" name="mno" value="{{$data->mobile}}">
                </div><br>
                
                <div class="form-group">
                    <label for="image">PortFolio</label>
                    <?php  $img =explode('|',$data->portfolio); ?><br>
                     <img src="/images/{{$img[0]}}" height="100px;" width="100px;"  />   
                    <img src="/images/{{$img[1]}}" height="100px;" width="100px;"  />
                    <input type="hidden" name="img" value="{{$data->portfolio}}">
                    <input type="checkbox" class="chk"  name="chk" id="chk" onclick="hello()">

                    <input type="file" class="form-control d-none" name="portfolio[]" id="portfolio" multiple>
                </div><br>
                <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" class="date" id="dob" name="dob" value="{{$data->dob}}">
                </div><br>
                <div class="form-group">
                    <label for="sdate">Start Date</label>
                    <input type="date" class="date" id="sdate" name="s_date" value="{{$data->start_date}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="ldate">End Date</label>
                    <input type="date" class="date" id="edate" name="e_date"  value="{{$data->end_date}}">
                </div><br>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Update"/>
                    <a href="/"><button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button></a>
                </div>
                
            </form> 
        </div>
    </body>
</html>
<script>
    function hello()
    {
        if(document.getElementById('chk').checked)
        {
            document.getElementById("portfolio").classList.remove('d-none');
        }
        else
        {
            document.getElementById("portfolio").classList.add('d-none');
        }
    }
    </script>