<header>
    <nav class="bg-sky-700">
        <div class="container mx-auto flex items-center justify-end h-16">
          <div class="flex items-center">
            <a href="{{ url('index') }}" class="text-white text-l mx-4 bg-sky-600 px-3 py-1 font-sans rounded-md hover:-translate-y-1 duration-200 hover:bg-sky-400 drop-shadow-lg">Home</a>
            <a href="{{ url('about') }}"  class="text-white text-l mx-4 bg-sky-600 px-3 py-1 font-sans rounded-md hover:-translate-y-1 duration-200 hover:bg-sky-400 drop-shadow-lg">Over mij</a>
            <a href="{{ url('projects/') }}"  class="text-white text-l mx-4 bg-sky-600 px-3 py-1 font-sans rounded-md hover:-translate-y-1 duration-200 hover:bg-sky-400 drop-shadow-lg">Projecten</a>
            <a href="{{ url('contact') }}"  class="text-white text-l mx-4 mr-12 bg-sky-600 px-3 py-1 font-sans rounded-md hover:-translate-y-1 duration-200 hover:bg-sky-400 drop-shadow-lg">Contact</a>
          </div>
          @guest
                <a href="{{ route('login') }}"  class="text-white text-l mr-4 bg-sky-600 px-3 py-1 font-sans rounded-md hover:-translate-y-1 duration-200 hover:bg-sky-400 drop-shadow-lg">Log in</a>
            @else
                <a href="{{ route('logout') }}"  class="text-white text-l bg-sky-600 px-3 py-1 font-sans mr-4 rounded-md hover:-translate-y-1 duration-200 hover:bg-sky-400 drop-shadow-lg" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Uitloggen</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
            @auth
              <div class="flex items-center">
                <a href="{{ route('register') }} "class= "text-white text-l bg-sky-600 px-3 py-1 font-sans rounded-md hover:-translate-y-1 duration-200 hover:bg-sky-400 drop-shadow-lg">Registreer</a>
              </div>
            @endauth
        </div>
    </nav>
</header>