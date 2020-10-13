
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <body>
          <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                 <div class="navbar-header">
                   <a class="navbar-brand">Details</a>
                  </div>
                 {{-- <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>

                  </ul>--}}
                <form class="navbar-form navbar-left" action="/search"  method="get">
                        <div class="form-group">
                          <input type="search" class="form-control" placeholder="Search" name="search">
                        </div>
                          <button type="submit" class="btn btn-success">Submit</button>

                          <a href=" {{action('UserController@export')}}" class="btn btn-info btn-sm">
                            <span class="glyphicon glyphicon-download-alt"></span> Download
                          </a>
                    </form>



                       <ul class="nav navbar-nav navbar-right">
                       <a href="addnew" class="btn btn-info btn-lg">
                           <span class="glyphicon glyphicon-plus-sign"></span> ADD
                         </a>
                       </ul>
                   </div>
           </nav>
                    <div class="container">
                        <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th scope="col"> @sortablelink('name')</th>
                            <th scope="col"> @sortablelink('address')</th>
                            <th scope="col"> @sortablelink('phone')</th>
                            <th scope="col"> @sortablelink('state')</th>
                             <th scope="col"> @sortablelink('country')</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                         @if($data->count())
                            @foreach($data ?? [] as $value)
                            <tr>
                              <td>{{ $value->name }}</td>
                              <td>{{ $value->address }}</td>
                              <td>{{ $value->phone }}</td>
                              <td>{{ $value->state }}</td>
                              <td>{{ $value->country }}</td>

                            <td>

                              

                                 <a href="{{action('UserController@show',['id' =>  $value->id ])}}"><button class="btn btn-primary">Show</button>
                                </a>
                                <a href="{{action('UserController@edit',['id' =>  $value->id ])}}"><button class="btn btn-success">Edit</button>
                                </a>
                                <a href="{{action('UserController@destroy',['id' =>  $value->id ])}}"><button class="btn btn-danger">Delete</button>

                            

                                </a>
                            </td>
                            </tr>
                            @endforeach
                          @endif
                        </tbody>
                    </table>
                    <div>

                    {!! $data->appends(\Request::except('page'))->render() !!}
                    </div>
               </div>
            </div>
        </div>
    </body>
</html>




