<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Book List</title>
</head>

<body class="bg-slate-800">
    <table class="table-auto text-white font-serif" >
        <thead>
          <tr class="border-y-4 border-gray-400  bg-slate-700">
            <th>ID</th>
            <th>ISBN</th>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>DESCRIPTION</th>
            <th>DATE PUBLISHED</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr class="border-b-2 border-gray-700">  
                  <td class="px-7">{{ $book->id }}</td>
                  <td class="px-7">{{ $book->isbn }}</td>         
                  <td class="px-7">{{ $book->title }}</td>
                  <td class="px-8">{{ $book->author }}</td>   
                  <td class="px-40">{{ $book->description }}</td>
                  <td class="px-2">{{ $book->date_published}}</td>         
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @extends('partials.footer') --}}
</body>
</html>