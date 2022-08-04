<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('Comapny.index') }}">Company</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('Employee.index') }}">Employees</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

{{-- end navbar --}}

<div class="container" style="margin-top: 50px">
    <a class="btn btn-primary btn-sm" style="margin-bottom: 30px"
        href="{{ route('Comapny.create') }}"> Add Company </a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Adrees</th>
            <th> Options </th>
          </tr>
        </thead>
        <tbody>
            @php
                   $i = 1;
            @endphp
            @foreach ( $companies as $com )
              <tr>
                    <th scope="row">{{ $i++  }}</th>
                    <td>{{ $com->name }} </td>
                    <td>{{ $com->adress }}</td>
                    <td>
                        <a class="btn btn-success btn-sm"  style="margin-bottom: 30px"
                        href="{{ route('Comapny.edit', $com->id) }}">Edit </a>
                        <form action="{{ route('Comapny.destroy' , $com->id ) }}" method="POST">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button type="submit" class="btn btn-danger"> Delete </button>
                        </form>
                        {{-- <a class="btn btn-danger btn-sm"
                        href="{{ route('Comapny.destroy', $com->id) }}">Delete</a> --}}
                    </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>



















<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
