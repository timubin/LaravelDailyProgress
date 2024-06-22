<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
            <th scope="col">City</th>
            <th scope="col">View</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
       
            @foreach ($data as $item)
            <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->city }}</td>
            <td>
                <a class="btn btn-primary" href="{{route('view.user', $item->id)}}">View</a>
            </td>
            <td>
                <a class="btn btn-danger" href="{{route('delete.user', $item->id)}}">Delete</a>
            </td>
        </tr>
            @endforeach
         


        </tbody>
      </table>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


<h1>All Users List</h1>




<ul>
    @foreach ($data as $data) 
        
    <li style="list-style: none; padding:5px;">User Name is :  {{ $data->name }} || city : {{ $data->city }} || email : {{ $data->email }}</li>
    @endforeach
</ul>