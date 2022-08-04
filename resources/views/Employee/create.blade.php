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
            <a class="nav-link active" aria-current="page" href="{{ route('Comapny.index') }}">Employees</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
{{-- end navbar --}}

<div class="container" style="margin-top: 50px">
    <div class="row">

     <form action="{{ route('Employee.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
        {{ csrf_field() }}
        <div class="col-lg-6">
            <label for="exampleFormControlInput1" class="form-label"> Name  </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Write Name">
          </div>
          <div class="col-lg-6">
            <label for="exampleFormControlInput1" class="form-label"> Email </label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Write Adrees">
          </div>
          <div class="col-lg-6">
            <label for="exampleFormControlInput1" class="form-label"> Password </label>
            <input type="password" class="form-control" id="exampleFormControlInput1" name="password" placeholder="Write Adrees">
          </div>
          <div class="col-lg-6">
            <label for="exampleFormControlInput1" class="form-label"> Comapny </label>
            <select name="company" class="form-control SlectBox" onclick="console.log($(this).val())"
             onchange="console.log('change is firing')">
                    <option value="" selected disabled>Choose Company </option>
                    @foreach ($companyies as $com)
                        <option value="{{ $com->id }}"> {{ $com->name }}</option>
                    @endforeach
           </select>
          </div>
          <div class="col-lg-6">
            <label for="exampleFormControlInput1" class="form-label"> Photo </label>
            <input type="file" class="form-control" id="exampleFormControlInput1" name="photo" placeholder="Write Adrees">
          </div>
          <div class="col-lg-6" style="margin-top: 30px">
                    {{-- <button type="submit" class="btn btn-primary"> Save </button> --}}
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">حفظ البيانات</button>
                    </div>

          </div>

     </form>


       </div>
</div>



















<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
