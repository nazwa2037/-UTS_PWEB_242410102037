<nav class="bg-white shadow-sm">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
        <h3 class="text-xl font-bold font-serif" style="font-family: 'Playfair Display', serif;">
            Orchish
        </h3>
      </a>

      <div class="hidden md:flex items-center gap-6 text-sm">
        <a href="{{ route('dashboard') }}" class="hover:text-rose-800">Dashboard</a>
        <a href="{{ route('pengelolaan') }}" class="hover:text-rose-800">Manage</a>
        <a href="{{ route('profile') }}" class="hover:text-rose-800">Profile</a>
        <a href="{{ route('login') }}" class="px-3 py-1 rounded-full border border-rose-800 text-rose-800 hover:bg-rose-800 hover:text-white">Logout</a>
      </div>
    </div>
  </div>
</nav>
