<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Stream</th>
        <th>Marks</th>
        <th>Subject</th>
        <th>Image</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
      @foreach($row as $r)
      <tr>
        <td>{{$r->name}}</td>
        <td>{{$r->gender}}</td>
        <td>{{$r->stream}}</td>
        <td>{{$r->marks}}</td>
        <td>{{$r->subject}}</td>
        <td><img style="width:60px;" src="{{url('/upload')}}/{{$r->image}}"/></td>
        <td><a href="{{url('/del')}}/{{$r->id}}"class="btn btn-danger">Delete</a></td>
        <td><a href="{{url('/upd')}}/{{$r->id}}"class="btn btn-primary">Update</a></td>
      </tr>
      @endforeach;
    </tbody>
  </table>
</div>

</body>
</html>
