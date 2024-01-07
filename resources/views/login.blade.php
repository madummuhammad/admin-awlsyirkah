<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Admin AWL Syirkah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body style="background-color: #0a681e">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-2 p-sm-5">
            <h3 class="card-title text-center mb-2">LOGIN</h5>
              {{-- <div class="d-flex flex-row p-3 justify-content-center mb-3">
                <img src="/logo/logo-bbpmsoh.png" class="me-2" height="80px" alt="">
                <img src="/logo/logo-kemen-pertanian.png" height="80px" alt="">
              </div> --}}
              <form action="{{ route('login-admin-action') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" name="email" id="floatingInput"
                    placeholder="name@example.com">
                  <label for="floatingInput">Email</label>
                  @error('email')
                    <div class="text-danger mb-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="password" id="floatingPassword"
                    placeholder="Password">
                  <label for="floatingPassword">Password</label>
                  @error('password')
                    <div class="text-danger mb-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Login</button>
                </div>
                <hr class="my-4">
                {{-- <a href="{{ route('register-user-admin') }}">Register User</a> --}}
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>
