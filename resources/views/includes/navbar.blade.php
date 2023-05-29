
   <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="/images/logo-dentist.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ (request()-> is('/*')) ? 'active'  :'' }}">
              <a class="nav-link" href="{{ route('home') }}">Home </a>
            </li>
            <li class="nav-item {{ (request()-> is('about*')) ? 'active' :'' }}">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item {{ (request()-> is('service*')) ? 'active' :'' }}">
              <a class="nav-link" href="{{ route('service') }}">Services</a>
            </li>
            <li class="nav-item {{ (request()-> is('facilities*')) ? 'active' :'' }}">
              <a class="nav-link mr-2" href="{{ route('facilities') }}">Facilites</a>
            </li>
            <a
                class="btn nav-link mr-5 px-4 text-white" style="background-color: #3993B7; color:white;"
                href="{{ route('contact') }}"
                >Contact Us</a
              >
            <li class="nav-item">



              <!-- <a
                class="btn nav-link px-4 text-white" style="background-color: #3993B7; color:white;"
                href="{{ route('appoinment') }}"
                >Make An Appoinment</a
              > -->
            </li>
          </ul>
        </div>
      </div>
    </nav>