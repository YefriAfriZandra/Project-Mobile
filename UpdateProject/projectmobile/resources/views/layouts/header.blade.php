<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
      <img src="\assets\logo.png" alt="" style="height: 30px">
      SIAK SMANLI
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button class="btn btn-dark nav-link px-3" type="submit" onclick="return confirm('Apakah anda yakin ingin keluar?')">Logout</button>
        </form>
       
      </div>
    </div>
  </header>