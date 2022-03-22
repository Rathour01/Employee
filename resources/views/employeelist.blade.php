<div class="card mb-3">
  <img src="https://th.bing.com/th/id/R.b5b3483c3f28cc4cd25eb1173d7a75a8?rik=Fr62sWdbCZvO7A&riu=http%3a%2f%2fwww.workspacesolutions.com%2fblog%2fwp-content%2fuploads%2f2020%2f04%2fcreative-office-environments.jpeg&ehk=InVbo%2bYHl35sPGXV36qI9rme2xcQY%2f%2bs9cQesa2jG5I%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of employees</h5>
    <p class="card-text">You can find all the info of employees.</p>

    
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Employee Name</th>
          <th scope="col">Division</th>
          <th scope="col">Project</th>
          <th scope="col">Age</th>
          <th scope="col">CTC</th>
          <th scope="col">Manager</th>
        </tr>
      </thead>
      <tbody>
        @foreach($employees as $employee)
        <tr>
          <td>{{ $employee -> empID}}</td>
          <td>{{ $employee -> employeeName}}</td>
          <td>{{ $employee -> division}}</td>
          <td>{{ $employee -> project}}</td>
          <td>{{ $employee -> age}}</td>
          <td>{{ $employee -> ctc}}</td>
          <td>{{ $employee -> manager}}</td>
          <td>         
              <a href="{{ url('/edit/'.$employee -> id) }}" class="btn btn-sm btn-warning">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>



