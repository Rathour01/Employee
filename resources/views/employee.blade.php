<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Employee Management System</title>
  </head>
  <body>
  @include("navbar")
    
  <div class="row header-container justify-content-center">
      <div class="header">
        <h1>Employee Management System</h1>
      </div>

  </div>

  @if($layout == 'index')
      <div class="container-fluid mt-4">
      <div class="container-fluid mt-4">
        <div class="row justify-content-center">
          <section class="col-md-7">
            @include("employeelist")
          </section>
        </div>
      </div>
      </div>
  @elseif ($layout =='create')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col">
            @include("employeelist")
          </section>
        
          <section class="col"> 

            <div class="card mb-3">
              <img src="https://th.bing.com/th/id/R.b891955ec3efc230ef38a85f1e7cb750?rik=URO519a3EsV31g&riu=http%3a%2f%2fwww.library.dartmouth.edu%2fsites%2fdefault%2ffiles%2fmedia-images%2ffeldberg-library-students-computer-dartmouth.jpg&ehk=uSTBu%2fcQxRQ%2baSGQYKWYFfAXpsYoHHUwbUytKGnk4dk%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Enter the information of the new employees</h5>

                <form action="{{ url('/store') }}"  method="get">
                  @csrf
                  <div class="form-group">
                    <label>ID</label>
                    <input name= "empID" type="text" class="form-control" placeholder="Enter ID">
                  </div>    
                  <div class="form-group">
                    <label>Employee Name</label>
                    <input name= "employeeName" type="text" class="form-control" placeholder="Enter the employee name">
                  </div>

                  <div class="form-group">
                    <label>Division</label>
                    <input name= "division" type="text" class="form-control" placeholder="Enter the division">
                  </div>

                  <div class="form-group">
                    <label>Project</label>
                    <input name= "project" type="text" class="form-control" placeholder="Enter the project working on">
                  </div>

                  <div class="form-group">
                    <label>Age</label>
                    <input name= "age" type="number" class="form-control" placeholder="Enter the age">
                  </div>
                  <div class="form-group">
                    <label>CTC</label>
                    <input name= "ctc" type="number" class="form-control" placeholder="Enter the CTC">
                  </div>

                  <div class="form-group">
                    <label>Manager</label>
                    <input name= "manager" type="text" class="form-control" placeholder="Enter the manager">
                  </div>

                  <input type="submit" class="btn btn-info" values="Save">
                  <input type="reset" class="btn btn-warning" values="Reset">
                </form>
              </div>
            </div>  


        

          </section>
        </div>
      </div>

  @elseif ($layout =='show')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col">
            @include("employeelist")
          </section>
          <section class="col"></section>
        </div>
      </div>
  @elseif ($layout =='edit')
      <div class="container-fluid mt-4">
        <div class="row">

          <section class="col -md-7">
            @include("employeelist")
          </section>
          <section class="col-md-5">

            <div class="card mb-3">
              <img src="https://th.bing.com/th/id/R.ae925ae38b5c74378bfb39e64e7bcc6f?rik=1plSP1VdAIdHvw&riu=http%3a%2f%2fwww.boulderdigitalarts.com%2flocal%2fcontent_includes%2fimg%2fcoworking-slideshow%2fshareddesk.jpg&ehk=RFgouWIVCuRnZgD4ae8PQfprUhzdGLAMRPoeuk5Jh1s%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
              <div class="card-body">
                 <h5 class="card-title">Update info of employees</h5>

              <form action="{{ url('/update/'.$employee->id) }}"  method="get">
                @csrf
                <div class="form-group">
                  <label>ID</label>
                  <input value="{{ $employee->empID}}" name= "empID" type="text" class="form-control" placeholder="Enter ID">
                </div>    
                <div class="form-group">
                  <label>Employee Name</label>
                  <input value="{{ $employee->employeeName}}" name= "employeeName" type="text" class="form-control" placeholder="Enter the employee name">
                </div>
                <div class="form-group">
                  <label>Division</label>
                  <input value="{{ $employee->division}}" name= "division" type="text" class="form-control" placeholder="Enter the division">
                </div>
                <div class="form-group">
                  <label>Project</label>
                  <input value="{{ $employee->project}}" name= "project" type="text" class="form-control" placeholder="Enter the project currently working on">
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input value="{{ $employee->age}}" name= "age" type="number" class="form-control" placeholder="Enter the age">
                </div>
                <div class="form-group">
                  <label>CTC</label>
                  <input value="{{ $employee->ctc}}" name= "ctc" type="number" class="form-control" placeholder="Enter the CTC">
                </div>
                <div class="form-group">
                  <label>Manager</label>
                  <input value="{{ $employee->manager}}" name= "manager" type="text" class="form-control" placeholder="Enter the manager">
                </div>
                <input type="submit" class="btn btn-info" values="Update">
                <input type="reset" class="btn btn-warning" values="Reset">
              </form>
            
            </div>
            </div>
          </section>
        </div>
      </div>
  @endif


     <footer></footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>