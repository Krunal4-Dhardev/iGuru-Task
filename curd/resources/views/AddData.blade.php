<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css">   
        <title>
                    Curd
            </title>
        </head>
        <body style="background-color: cornflowerblue;">
            
            <div class="container shadow-lg p-3 mb-5 bg-white rounded">    
                <form action="addData" method="post" enctype="multipart/form-data">
                    @csrf
                       <div class="form-group">
                           <label for="username">User Name</label>
                           <input type="text" class="form-control" name="username" id="u_name"  placeholder="Enter User Name " >
                           @if($errors->has('username'))
                                <h5 style="color:red" class="flash">{{ $errors->first('username') }}</h5>
                           @endif
                       </div><br>
                       <div class="form-group">
                           <label for="Email">Email address</label>
                           <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        @if($errors->has('email'))
                           <h5 style="color:red" class="flash">{{ $errors->first('email') }}</h5>
                        @endif
                        </div><br>
                       <div class="form-group">
                           <label for="Fname">First Name</label>
                           <input type="text" class="form-control" id="f_name" name="first_name" placeholder="Enter First Name ">
                        @if($errors->has('first_name'))
                           <h5 style="color:red" class="flash">{{ $errors->first('first_name') }}</h5>
                        @endif
                        </div><br>
                       <div class="form-group">
                           <label for="Lname">Last Name</label>
                           <input type="text" class="form-control" id="l_name" name="last_name" placeholder="Enter Last Name ">
                        @if($errors->has('last_name'))
                           <h5 style="color:red" class="flash">{{ $errors->first('last_name') }}</h5>
                        @endif
                        </div><br>
                       <div class="form-group">
                           <label for="gender">Gender</label>
                           <select name="gen" id="gen">
                               <option>Male</option>
                               <option>FeMale</option>
                           </select>
                        @if($errors->has('gen'))
                           <h5 style="color:red" class="flash">{{ $errors->first('gen') }}</h5>
                        @endif  
                       </div><br>
                       <div class="form-group">
                           <label for="mno">Mobile Number</label>
                           <input type="tel" class="form-control" id="mno" name="mobile" maxlength="10" placeholder="Enter Mobile N0 ">
                        @if($errors->has('mobile'))
                           <h5 style="color:red" class="flash">{{ $errors->first('mobile') }}</h5>
                        @endif  
                         </div><br>
                       
                       <div class="form-group">
                           <label for="image">PortFolio</label>
                           <input type="file" class="form-control" name="portfolio[]" id="portfolio" multiple>
                            @if($errors->has('portfolio'))
                                <h5 style="color:red" class="flash">{{ $errors->first('portfolio') }}</h5>
                            @endif 
                       </div><br>
                       <div class="form-group">
                           <label for="dob">Date Of Birth</label>
                           <input type="date" class="date" id="dob" name="dob" >
                           @if($errors->has('dob'))
                                <h5 style="color:red" class="flash">{{ $errors->first('dob') }}</h5>
                            @endif 
                       </div><br>
                       <div class="form-group">
                           <label for="sdate">Start Date</label>
                           <input type="date" class="date" id="sdate" name="start_date">
                           @if($errors->has('start_date'))
                                <h5 style="color:red" class="flash">{{ $errors->first('start_date') }}</h5>
                            @endif 
                       </div>
                       <br>
                       <div class="form-group">
                           <label for="ldate">End Date</label>
                           <input type="date" class="date" id="edate" name="end_date">
                           @if($errors->has('dob'))
                                <h5 style="color:red" class="flash">{{ $errors->first('end_date') }}</h5>
                            @endif 
                       </div>
                       <!-- Modal footer -->
                       <div class="modal-footer">
                           <input type="submit" class="btn btn-success" value="ADD"/>
                           <a href="/"><button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button></a>
                       </div>
                       
                   </form>      
              
            </div>
        </body>
</html>
