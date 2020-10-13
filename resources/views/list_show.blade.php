<!DOCTYPE html>
<html>
 <head>
  <title>Your Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 </head>
 <body>
 <h2 style="text-align:center;">List </h2>

  

<div class="table-responsive">
  <table class="table table-striped table-hover table-condensed">
    <thead>
      <tr>
        <th><strong>Name</strong></th>
        <th><strong>Address</strong></th>
        <th><strong>Phone</strong></th>
        <th><strong>State</strong></th>
        <th><strong>Country</strong></th>
      </tr>
    </thead>
    <tbody>

    @foreach($info as $key=> $datas)
<tr>
    
    <td>{{$datas->name}}</td>
    <td>{{$datas->address}}</td>
    <td>{{$datas->phone}}</td>
    <td>{{$datas->state}}</td>
    <td>{{$datas->country}}</td>

</tr>

@endforeach
    </tbody>
  </table>

    <a class="btn btn-danger" href="{{ url('/list') }}">Back</a>
        
      
     
   
    </body>
</html>