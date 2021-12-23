  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
          <a class="navbar-brand" href="{{route('welcome')}}">
              <img src="{{asset ('assets/images/logo.png')}}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Program</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Mentor</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Business</a>
                  </li>
              </ul>
              @auth
              <!-- role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" -->
              <div class="d-flex user-logged">
                  <a href="" role="button" id="dropdownMenulink" data-bs-toggle="dropdown" aria-expanded="false">
                      Halo, {{Auth::user()->name}}
                      <img src="{{ Auth::user()->avatar }}" class="user-photo " style="border-radius: 100%;" alt="">
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style=" left:auto">
                          <li>
                              <a href="" class="dropdown-item">
                                  My Dashboard
                              </a>
                          </li>
                          <li>
                              <a href="" class="dropdown-item"
                                  onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign
                                  Out</a>
                              <form id="logout-form" class="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display:none">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              </form>
                          </li>
                      </ul>
                  </a>
              </div>

              @else
              <div class="d-flex">
                  <a href="{{route('login')}}" class="btn btn-master btn-secondary me-3">
                      Sign In
                  </a>
                  <a href="{{route('login')}}" class="btn btn-master btn-primary">
                      Sign Up
                  </a>
              </div>
              @endauth
          </div>

      </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
  </script>