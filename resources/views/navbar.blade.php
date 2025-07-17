<header>
  <a href="{{ route('home') }}" class="logo" aria-label="Logo Edukasi4ID">
    <img src="{{ asset('logo-edukasi4id.png') }}" alt="Edukasi4ID Logo" width="60" height="50" style="margin-right:6px;">
    <span></span>
  </a>
  <nav role="navigation" aria-label="Primary navigation">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
    <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'active' : '' }}">Profil</a>
    <a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a>
    <a href="{{ route('mitra') }}" class="{{ request()->routeIs('mitra') ? 'active' : '' }}">Mitra</a>
    <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak Kami</a>
  </nav>
</header>