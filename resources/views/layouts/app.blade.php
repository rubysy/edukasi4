<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Edukasi4 ID')</title>
  <link rel="icon" href="https://edukasi4.id/gambar/edukai.png">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Navbar CSS manual -->
  <style>
       header {
    background-color: #fff;
    border-bottom: 1px solid #ddd;
    padding: 12px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  }
  .logo {
    display: flex;
    align-items: center;
    font-weight: 700;
    font-size: 2rem;
    color: #69cae8;
    letter-spacing: -0.04em;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  }

  nav {
    display: flex;
    align-items: center;
    gap: 24px;
    font-weight: 600;
    font-size: 1rem;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  }

  a {
  text-decoration: none;
  color: inherit;
}

    .logo svg {
      width: 40px;
      height: 40px;
      margin-right: 6px;
      fill: #69cae8;
    }


    nav a {
      color: #000;
      position: relative;
      padding: 8px 14px;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }

    nav a.active,
    nav a:hover {
      background-color: #69cae8;
      color: #fff;
      font-weight: 700;
      box-shadow: 0 4px 10px rgb(105 202 232 / 0.3);
    }
    @media (max-width: 750px) {
      header {
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
      }
      nav {
        gap: 14px;
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body class="antialiased" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  @include('navbar')
  @yield('content')
</body>
</html>