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
    <section class="bg-gray-100">
        <div class="container mb-8">
            <div class="p-6">
                <h1 class="text-5xl font-bold text-gray-800">Projects</h1>
                <p class="text-l py-3 font-bold text-gray-800">Hier vind je mijn gemaakte projecten!</p>
            </div>                
        </div>
        <div class="container mx-auto flex flex-col items-center py-8">
            <img src="/images/bol.com.jpg" alt="Project afbeelding" class="w-1/2 object-contain">
            <h2 class="text-2xl font-bold mt-4">Bol.com</h2>
            <p class="text-gray-600 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio incidunt eius eligendi dolorum nobis reiciendis minima sunt animi. Ratione ipsum beatae totam. Earum ut consequatur perferendis totam aperiam nemo? Perferendis?</p>
        </div>
        <div class="container mx-auto flex flex-col items-center py-8">
            <img src="/images/mediamarkt.png" alt="Project afbeelding" class="w-1/2 object-contain">
            <h2 class="text-2xl font-bold mt-4">Mediamarkt</h2>
            <p class="text-gray-600 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio incidunt eius eligendi dolorum nobis reiciendis minima sunt animi. Ratione ipsum beatae totam. Earum ut consequatur perferendis totam aperiam nemo? Perferendis?</p>
        </div>
        <div class="container mx-auto flex flex-col items-center py-8">
            <img src="/images/coolblue.png" alt="Project afbeelding" class="w-1/2 object-contain">
            <h2 class="text-2xl font-bold mt-4">Coolblue</h2>
            <p class="text-gray-600 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio incidunt eius eligendi dolorum nobis reiciendis minima sunt animi. Ratione ipsum beatae totam. Earum ut consequatur perferendis totam aperiam nemo? Perferendis?</p>
        </div>              
      </section>
      <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
          <p>© 2023 Portfolio Website. Alle rechten voorbehouden.</p>
        </div>
      </footer>      
</body>
</html>