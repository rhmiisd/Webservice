<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('template2/dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('template2/dashboard/css/style.min.css') }}" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(45deg, #6BB98B, #0DE9E1); /* Adjust the colors as needed */
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .btn-primary {
    background-color: #6BB98B; /* Change this color to your preferred button color */
    border-color: #0DE9E1; /* You can also change the border color if needed */
    color: #fff; /* Set the text color to white or another contrasting color */
  }

    .card {
      margin: 0;
      width: 100%;
      border: none;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="col-lg-6">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">KONNICHIWA MINNA</h1>
            </div>
            <form action="{{ route('login') }}" method="POST" class="user">
              @csrf
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                </div>
              @endif
              <div class="form-group">
                <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
              </div>
              <div class="form-group">
                <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox small">
                  <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                  <label class="custom-control-label" for="customCheck">Remember Me</label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-user">Login</button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="{{ route('register') }}">Create an Account!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('template2/dashboard/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('template2/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('template2/dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('template2/dashboard/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
