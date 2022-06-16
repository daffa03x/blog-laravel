<!-- Navigation -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
  <div class="container">

      <!-- Image Logo -->
      <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> -->

      <!-- Text Logo - Use this if you don't have a graphic logo -->
      <a class="navbar-brand logo-text" href="/">Our Blog</a>

      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
          <ul class="navbar-nav ms-auto navbar-nav-scroll">
              <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/posts">Post</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/categories">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>         
            @else
            <li class="nav-item">
                <a href="/login"class="nav-link {{ Request::is('login') ? 'active' : '' }}"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
            </li>
            @endauth
            </ul>
      </div> <!-- end of navbar-collapse -->
  </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->