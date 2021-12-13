<div class="col">
    <table class="table">

  <thead>
          <tr>
            <th scope="col">CNE</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">Specility</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>

                    <td>{{$student->cne}}</td>
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->lastName}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->speciality}}</td>
                    <td>
                        <a href="#" class="btn btn-info">Show</a>
                        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
