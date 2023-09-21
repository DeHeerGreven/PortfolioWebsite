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
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto">
        @csrf
        <div class="mb-4">
          <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
          <input type="text" id="title" name="title" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-indigo-500">
        </div>
      
        <div class="mb-4">
          <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
          <textarea id="description" name="description" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-indigo-500"></textarea>
        </div>
      
        <div class="mb-4">
          <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
          <select id="category" name="category_id" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-indigo-500">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
      
        <div class="mb-4">
          <label for="images" class="block text-gray-700 text-sm font-bold mb-2">Images</label>
          <input type="file" id="images" name="images[]" multiple class="w-full">
        </div>
      
        <div class="mb-4">
          <label for="tags" class="block text-gray-700 text-sm font-bold mb-2">Tags</label>
          <select id="tags" name="tag_ids[]" multiple required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-indigo-500">
            @foreach ($tags as $tag)
              <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
          </select>
        </div>
      
        <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded">Create Project</button>
      </form>
    @include('Footer')    
</body>
</html>