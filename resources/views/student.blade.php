<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>
    @include('navbar')

    @if ($layout=='index')
    <div class="container-fluid">
       <div class="row">
        <section class="col-md-7">
            @include('studentslist')
        </section>
        <section class="col-md-5"></section>
       </div>
    </div>


    @elseif ($layout=='create')
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-7">
                @include('studentslist')
            </section>
            <section class="col-md-5">
                <form action="{{url('/store/')}}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">CNE</label>
                      <input name="cne" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter CNE">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">First Name</label>
                        <input name="firstName" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter First Name">
                      </div>
                      <div class="mb-3">
                        <label  class="form-label">Last Name</label>
                        <input name="lastName" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Last Name">
                      </div>
                      <div class="mb-3">
                        <label  class="form-label">Age</label>
                        <input name="age" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Age">
                      </div>
                      <div class="mb-3">
                        <label  class="form-label">Specility</label>
                        <input name="speciality" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Write Something">
                      </div>
                      <input type="submit" class="btn btn-info" value="Save">
                      <input type="reset" class="btn btn-warning" value="Reset">
                  </form>
            </section>
        </div>
    </div>
    @elseif ($layout=='show')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include('studentslist')
            </section>
            <section class="col"></section>
        </div>
    </div>
    @elseif ($layout=='edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include('studentslist')
            </section>
            <section class="col">
                <form action="{{url('/update/'.$student->id)}}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">CNE</label>
                      <input value="{{$student->cne}}" name="cne" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter CNE">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">First Name</label>
                        <input value="{{$student->firstName}}" name="firstName" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter First Name">
                      </div>
                      <div class="mb-3">
                        <label  class="form-label">Last Name</label>
                        <input value="{{$student->lastName}}" name="lastName" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Last Name">
                      </div>
                      <div class="mb-3">
                        <label  class="form-label">Age</label>
                        <input value="{{$student->age}}" name="age" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Age">
                      </div>
                      <div class="mb-3">
                        <label  class="form-label">Specility</label>
                        <input value="{{$student->speciality}}" name="speciality" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Write Something">
                      </div>
                      <input type="submit" class="btn btn-info" value="Update">
                      <input type="reset" class="btn btn-warning" value="Reset">
                  </form>

            </section>
        </div>
    </div>

    @endif





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
