
<style>
    /* Gaya awal navbar */
    .navbar-blog {
    background-color: transparent;
    transition: background-color 0.3s ease-in-out; /* Efek transisi ketika background berubah */
    }
    /* Gaya navbar saat di-scroll */
    .navbar-scroll {
    background-color: blue !important;
    }

</style>
  <nav class="navbar navbar-expand-md bg-transparent sticky-top bg-danger navbar-public navbar-blog">
    <div class="container">
      <a class="navbar-brand icon-raptech" href="#">RAPTech</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end navbar-public" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">RAPTech</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link {{ ($active =="home") ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active =="posts") ? 'active' : '' }}" href="/posts">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active =="categories") ? 'active' : '' }}" href="/categories">Categories</a>
            </li>
            <li class="nav-item {{ ($active =="about")? 'active': '' }}">
              <a class="nav-link {{ ($active =="about") ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item w-4 flex-item search">
                <div class="col-md-6">
                    <form action="/posts">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                            <button class="btn btn-danger" type="submit" ><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item dropdown login-btn">
              <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu navbar-public" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                      </form>
                  </ul>
                </li>
                  @else
                    <li class="nav-item">
                      <a href="/login" class="nav-link {{ ($active =="login") ? 'active' : '' }}"><i class="bi bi-"></i> Login</a>
                    </li>
                @endauth
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      window.addEventListener("scroll", function() {
        var navbar = document.querySelector(".navbar-blog");
        // Tentukan tinggi scroll saat perubahan warna background (misal: 50 piksel)
        var scrollThreshold = 50;

        if (window.scrollY > scrollThreshold) {
          navbar.classList.add("navbar-scroll");
        } else {
          navbar.classList.remove("navbar-scroll");
        }
      });
    });
  </script>
