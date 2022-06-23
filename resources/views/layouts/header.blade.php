{{--  --}}
<header class="header-area header-2">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Navbar Brand --><a class="navbar-brand" href="/"><img src="img/core-img/logo.png" alt=""></a>
        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#saasboxNav" aria-controls="saasboxNav" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-grid"></i></button>
        <!-- Navbar Nav -->
        <div class="collapse navbar-collapse" id="saasboxNav">
          <ul class="navbar-nav navbar-nav-scroll">
            <li xclass="sb-dropdown"><a href="/">Inicio</a>
            </li>
            <li class="xsb-dropdown">
              <a href="{{ route('viewportafolio') }}">
                Portafolio
              </a>
            </li>
            <li xclass="sb-dropdown">
              <a href="{{ route('viewteam') }}">
                Equipo
              </a>
            </li>
            <li xclass="sb-dropdown">
              <a href="{{ route('viewblog') }}">
                Blog
              </a>
            </li>
            <li xclass="sb-dropdown">
              <a href="{{ route('viewcontacto') }}">
                Contacto
              </a>
            </li>
          </ul>
          <!-- Login Button --><a class="btn btn-success btn-sm ms-auto mb-3 mb-lg-0" href="#">WhatsApp</a>
        </div>
      </div>
    </nav>
</header>
<div class="body">
