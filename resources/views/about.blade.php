<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav class="bg-gray-800">
            <div class="container mx-auto flex items-center justify-end h-16">
                <div class="flex items-center">
                    <a href="{{ url('index') }}" class="text-white font-bold text-lg">Home</a>
                    <a href="{{ url('about') }}" class="ml-4 text-gray-300 hover:text-white">Over mij</a>
                    <a href="{{ url('projects') }}" class="ml-4 text-gray-300 hover:text-white">Projecten</a>
                    <a href="{{ url('contact') }}" class="ml-4 text-gray-300 hover:text-white">Contact</a>
                </div>
              <div class="flex items-center">
                <a href="{{ route('login') }}" class="ml-4 text-gray-300 hover:text-white">Log in</a>
              </div>
            </div>
        </nav>
    </header>
    <section class="bg-gray-100 h-screen flex items-center justify-center">
        <div class="container">
          <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800">Over mij</h1>
            <p class="mt-4 text-gray-600">Voor deze front-end developer is niks te klein! Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro vel atque repellat eligendi obcaecati repudiandae quis tempore beatae! Eaque animi ea molestiae recusandae natus tempore, porro molestias incidunt laudantium assumenda.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, quis? Sunt natus reiciendis deleniti qui ullam eaque, magni, suscipit soluta quod beatae id nesciunt quae illo ut temporibus consequatur totam!
            </p>
            <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro vel atque repellat eligendi obcaecati repudiandae quis tempore beatae! Eaque animi ea molestiae recusandae natus tempore, porro molestias incidunt laudantium assumenda.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, quis! Sunt natus reiciendis deleniti qui ullam eaque, magni, suscipit soluta quod beatae id nesciunt quae illo ut temporibus consequatur totam?
            </p>
          </div>
        </div>
      </section>
      <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
          <p>© 2023 Portfolio Website. Alle rechten voorbehouden.</p>
        </div>
      </footer>      
</body>
</html>