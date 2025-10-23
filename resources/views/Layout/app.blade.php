<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title','Orchish')</title>

  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="min-h-screen bg-red-100 text-rose-950" style="font-family: 'Playfair Display', serif;">
  <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    @yield('content')
  </main>
  @include('Components.footer')
</body>
</html>
