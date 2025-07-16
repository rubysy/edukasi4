<header>
  <a href="{{ route('home') }}" class="logo" aria-label="Logo Edukasi4ID">
    <svg viewBox="0 0 64 64" width="36" height="36" aria-hidden="true">
      <rect x="10" y="10" width="12" height="12" fill="#69cae8"/>
      <rect x="28" y="10" width="12" height="12" fill="#f15a24"/>
      <rect x="46" y="10" width="8" height="12" fill="#262626"/>
      <text x="10" y="54" font-size="36" font-family="Arial" fill="#69cae8" font-weight="bold">4</text>
    </svg>
    <span>EDUKASI</span>
  </a>
  <nav role="navigation" aria-label="Primary navigation">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
    <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'active' : '' }}">Profil</a>
    <a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a>
    <a href="{{ route('mitra') }}" class="{{ request()->routeIs('mitra') ? 'active' : '' }}">Mitra</a>
    <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak Kami</a>
  </nav>
</header>