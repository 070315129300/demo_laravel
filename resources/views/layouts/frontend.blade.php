<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('pagetitle') {{config('app.name','friend app')}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <style type="text/css">
      .nav-link {
        color: white;
      }

      .nav-link:hover {
        color: grey;
      }

    </style>


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg  fixed-top header-footer-bg">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/logo2.png')}}" width='100'></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about')}}">about us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('service')}}">our services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('faq')}}">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('blogs')}}">blogs</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{route('myprofile', ['id=>9'])}}"> student profile</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Hello Adeola
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="profile.html">Edit Profile</a>
                <a class="dropdown-item" href="payments.html">My Payments</a>
                <a class="dropdown-item" href="shop.html">Shop</a>
              </div>
            </li>
            <li class="nav-item" style='background-color:yellow;margin-left:60px !important;'>
              <a class="nav-link" style='color:green' href='#' data-toggle="modal" data-target="#exampleModal">Login</a>
            </li>


          </ul>
        </div>
      </div>
    </nav>
      @yield('content')
        <!-- Footer -->
    <footer class="py-5 header-footer-bg">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; {{config('app.name','Friend App')}} {{date('Y')}}</p>{{date('Y')}}
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Member's Login Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action='login.php'>
              <div class="form-group">
                <label for="exampleInputEmail1">User ID</label>
                <input type="text" name='userid' class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name='pwd' class="form-control" id="exampleInputPassword1">
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-info">Login</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </body>

</html>