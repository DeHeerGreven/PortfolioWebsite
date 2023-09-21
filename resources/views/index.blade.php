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
    <section class="h-screen flex items-center justify-center" style="background-image: url('images/achtegrond.webp'); background-size: cover; background-position: center;">
        <div class="container flex gap-4 items-center">
          <div>
            <h1 class="text-3xl font-bold text-gray-900">"Van het onmogelijke het mogelijke maken."</h1>
            <p class="text-center mt-4 text-gray-600 text-xl text-gray-900">Bastiaan Greven.</p>
          </div>
          <div>
            <img src="images/1680076638508.jpg" class="w-96 ml-28 rounded-md" alt="afbeelding">
          </div>  
        </div>
      </section>
  @include('Footer')   
</body>
</html>