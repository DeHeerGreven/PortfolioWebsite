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
  @include('Header')
    <section class="bg-gray-100 h-screen flex items-center justify-center" style="background-image: url('images/achtegrond.webp'); background-size: cover; background-position: center;>
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
    @include('Footer')    
</body>
</html>