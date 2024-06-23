<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <style>
    nav .w-5{
      display: none;
    }
  </style>
  <body>
   
    <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10 mt-3">
            <a class="btn btn-primary btn-sm" href="newuser">Add User</a>      
            <table class="table table-striped">
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
                  <td id="city">{{ $item->city }}</td>
                  <td>
                      <a class="btn btn-primary btn-sm" href="{{route('view.user', $item->id)}}">View</a>
                  </td>
                  <td>
                    <a class="btn btn-info btn-sm" href="{{route('update.page', $item->id)}}">Update</a>
                    <a id="delete" onclick="handleDeleteClick(event)" class="btn btn-danger btn-sm" href="{{route('delete.user', $item->id)}}">Delete</a>
                  </td>
              </tr>
                  @endforeach
               
      
      
              </tbody>
            </table>
            <div>

              {{ $data->links() }}
            </div>
            <div>
           {{--  Total Users :  {{ $data->total() }} <br>
            Total Current Page :  {{ $data->currentPage() }} --}}
            </div>
          </div>
          <div class="col-md-1"></div>



        </div>
    </div>

    <script>
 /*      var deleteLinks = document.querySelector('#delete');

      function handleDeleteClick(event) {
        event.preventDefault();
        confirm('Are you sure you want to delete?');
       
      } */

     
      

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
