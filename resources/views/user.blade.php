<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Singal User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="container">
        <div class="row">

          <table class="table ">
            <thead class="table-primary">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email </th>
                <th scope="col">Age </th>
                <th scope="col">City</th>
              </tr>
            </thead>
            <tbody>
           
                @foreach ($data as $item)
                <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->city }}</td>

            </tr>
                @endforeach
             
    
    
            </tbody>
          </table>



{{-- 
            @foreach ($data as $id=>$user )
            <h3>Name : {{ $user->name}}</h3>
            <h3>Email : {{ $user->email}}</h3>
            <h3>city : {{ $user->city}}</h3>

                
            @endforeach
             --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>






