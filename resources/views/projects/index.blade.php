<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/css/app.css')
</head>
<style>
  .slideshow-container {
      position: relative;
      max-width: 100%;
      margin: auto;
  }

  .slideshow-container img {
      width: 100%;
      height: auto;
  }

  .slideshow-container .prev,
  .slideshow-container .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 18px;
      font-weight: bold;
      padding: 12px;
      color: white;
      background-color: black;
      cursor: pointer;
  }

  .slideshow-container .prev {
      left: 0;
  }

  .slideshow-container .next {
      right: 0;
  }
</style>
<body>
    @include('Header')
        <section class="" style="background-image: url('images/achtegrond.webp'); background-size: cover; background-position: center;">
            <div class="container mb-8">
                <div class="p-6">
                    <h1 class="text-5xl font-bold text-gray-800">Projects</h1>
                    <p class="text-l py-3 font-bold text-gray-800">Hier vind je mijn gemaakte projecten!</p>
                    @auth
                        <a class="btn btn-success" href="{{ route('projects.create') }}">Nieuw project</a>
                    @endauth
                </div>                
            </div>
            <div class="container mx-auto flex flex-col items-center py-8">
                <img src="images/ns_nl.jpg" class="w-1/2 object-contain mt-4 border-2 border-sky-700 rounded-md" alt="">
                <h2 class="text-2xl font-bold mt-4">Halooo</h2>
                <p class="text-gray-600 mt-2">rere</p>
            </div>
            <h1 class="text-2xl font-bold text-gray-800 mt-2">Andere Projecten</h1>
            <div class="container mx-auto flex justify-end mb-4">
                <select name="category" id="category">
                    <option value="">Alle categorieën</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="container mx-auto grid grid-cols-2 gap-4">
            @foreach($projects as $project)
                <div class="bg-gray-100 border-2 border-sky-700 rounded-md mb-4 p-4 project" data-category="{{ $project->category_id }}">
                    <div class="slideshow-container">
                        @foreach($project->images as $image)
                            <img class="slideshow-image" class="w-full object-cover mt-4 " src="{{ asset('images/' . $image->path) }}" alt="Afbeelding">
                        @endforeach
                        <a class="prev">&#10094;</a>
                        <a class="next">&#10095;</a>
                    </div>
                    <h2 class="text-2xl font-bold mt-4">{{ $project->title }}</h2>
                    <p class="text-gray-600 mt-2">{{ $project->description }}</p>
                    @auth
                        <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">Bewerk</a>
                        <form  id="deleteForm" action="{{ route('projects.destroy', $project->id) }}"  method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="showConfirmationPopup('{{ $project->title }}')">Delete</button>
                        </form>
                    @endauth
                </div>
            @endforeach
        </div> 
        </section>
    @include('Footer')
</body>

<script>
  $(document).ready(function() {
      $(".slideshow-container").each(function() {
          var $container = $(this);
          var $images = $container.find(".slideshow-image");
          var currentIndex = 0;

          function showImage(index) {
              $images.hide();
              $images.eq(index).show();
          }

          function nextImage() {
              currentIndex++;
              if (currentIndex >= $images.length) {
                  currentIndex = 0;
              }
              showImage(currentIndex);
          }

          function prevImage() {
              currentIndex--;
              if (currentIndex < 0) {
                  currentIndex = $images.length - 1;
              }
              showImage(currentIndex);
          }

          $container.find(".next").click(nextImage);
          $container.find(".prev").click(prevImage);

          showImage(currentIndex);
      });
  });

  $(document).ready(function() {
    $("#category").change(function() {
        var categoryId = $(this).val();
      
        if (categoryId) {
            $(".project").hide();
            $(".project[data-category='" + categoryId + "']").show();
        } else {
            $(".project").show();
        }
    });
});

    function showConfirmationPopup(projectTitle) {
        var confirmation = confirm("Are you sure you want to delete the project: " + projectTitle + "?");

        if (confirmation) {
            var userInput = prompt("Please enter the project title to confirm deletion:", "");

            if (userInput !== null && userInput.trim() === projectTitle) {
                document.getElementById("deleteForm").submit();
            } else {
                alert("Project deletion canceled.");
            }
        }
    }

</script>
</html>

