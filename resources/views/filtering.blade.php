<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Filtering!</title>
  </head>
  <body>
    <div class="card">
      <div class="card-header text-center my-3">
    <h1>Filtering!</h1>
      </div>

      <div class="row">

        <div class="col-3">

          <div class="text-center my-3">
            <h3>Filter</h3>
          </div>
          <form action="/">

            <div class="p-3 form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{request()->name}}">

            <div class="">
            <label for="is_active">Is Active</label>
            <input type="radio" value="1" name="is_active" {{ request()->is_active == 1 ? 'checked' : ''}}></div>
            
            <div class="">
            <label for="is_not_active">Is Not Active</label>
            <input type="radio" value="0" name="is_active" {{ ! request()->is_active ? 'checked' : ''}}></div>

            <label for="birthday">Birthday</label>
            <input type="text" name="birthday" class="form-control" value="{{request()->birthday}}">

            <label for="gender">Gender</label>
            <select class="form-control" name="gender">
              <option value="1" {{request()->gender == '1' ? 'selected' : ''}}>Male</option>
              <option value="2" {{request()->gender == '2' ? 'selected' : ''}}>Female</option>
            </select>

            

            <p><button type="submit" class="mt-3 btn btn-success">Filter</button></p>

            </div>
            

          </form>


        </div>


      <div class="col-9">

          <div class="text-center my-3">
            <h3>Results</h3>
          </div>

          <div class="row">
          @foreach($users as $user)
          <div class="col-4 mb-3">
            <div class="card">
            <div class="card-header">
            {{$user->name}}
            </div>
            <div class="card-body">
            <h5 class="card-title">{{$user->email}}</h5>
            <p class="card-text">Birthday:{{$user->info->birthday}}</p>
            <p class="card-text">
              Is Active:
              @if($user->is_active == '1')
              <span style="color:green; font-weight: 600;">Active</span>
              @else
              <span style="color:red; font-weight: 600;">Not Active</span>
              @endif
            </p>
            <a style="color: white; font-weight: 600;" class="btn btn-primary">Gender: {{$user->gender == '1' ? 'Male' : 'Female'}}
            
            </a>
            </div>
            </div>
            </div>
          @endforeach
          </div>
  

        </div>

      </div>

    </div>




    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>