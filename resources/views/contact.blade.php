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
    <section class="bg-gray-100 h-screen flex items-center justify-center" style="background-image: url('images/achtegrond.webp'); background-size: cover; background-position: center;">
        <div class="container">
          <div class="text-center">
            @if(Session::has('message_sent'))
              <div class="alert alert-success" role="alert">
                  {{Session::get('message_sent')}}
              </div>
            @endif
            <h1 class="text-5xl mb-2 font-bold text-gray-800">Contact</h1>
            <p>Neem contact met mij op!</p>
             <form method="POST" enctype="multipart/form-data" class="flex flex-col items-center">
              @csrf
              <div class="mb-4">
                <label for="name">Naam</label>
                <input type="text" name="name" class="border border-gray-300 p-2 rounded-md w-full">
              </div>
              <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" class="border border-gray-300 p-2 rounded-md w-full">
              </div>
              <div class="mb-4">
                <label for="phone">Telefoonnummer</label>
                <input type="text" name="phone" class="border border-gray-300 p-2 rounded-md w-full">
              </div>
              <div class="mb-4">
                <label for="msg">Bericht</label>
                <textarea name="msg" class="border border-gray-300 p-2 rounded-md w-full"></textarea>
              </div>
              <button type="submit" class="bg-green-500 p-2 border-radius-2">Versturen</button>
            </form>
          </div>
        </div>
      </section>
    @include('Footer')    
</body>
</html>