<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logonav.png') }}" alt="Logo" height="50">
            Wellness & Shine
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>

        <div class="select" tabindex="0" role="button">
            <div class="text-links">
                <div class="d-flex gap-2 align-items-center">
                    <img src="" class="rounded-circle"
                        style="width: 50px;" alt="">
                    <div class="d-flex flex-column text-white">
                        <p class="m-0" style="font-weight: 700; font-size:14px;">
                        </p>
                        <p class="m-0" style="font-size:12px"></p>
                    </div>
                </div>
            </div>
            <div class="links-login text-white" id="links-login">
                <a href="logout_pelanggan" style="text-decoration: none" role="button"
                    tabindex="0">Keluar</a>
            </div>

            <li class="nav-item">
                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Login | Register</button>
            </li>

            <li class="nav-item">
                <div class="notif">
                    <a href="/transaksi" class="fs-5 nav-link {{ Request::path() == 'transaksi' ? 'active' : '' }}">
                        <i class="fa fa-bag-shopping"></i>
                    </a>
                    <div class="circle">{{ $count }}</div>
                </div>
            </li>
            <li class="nav-item">
                <div class="notif">
                    <a href="/checkOut" class="fs-5 nav-link {{ Request::path() == 'checkOut' ? 'active' : '' }}">
                        <i class="fa fa-cash-register"></i>
                    </a>
                </div>
            </li>
        </div>
      </ul>
    </div>
  </nav>
