<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Etudiants')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script>
    const theme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-bs-theme', theme);
  </script>
</head>
<body>
<div class="container mt-5 animate__animated animate__fadeIn animate__slow  animate__repeat-1">
    <button id="theme-toggle" class ="animate__animated animate__bounce">☀️ / 🌙</button>
  <script>
    document.getElementById('theme-toggle').onclick = () => {
      const next = document.documentElement.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-bs-theme', next);
      localStorage.setItem('theme', next);
    };
  </script>
  @yield('content')
</div>
</body>
</html>
