<!DOCTYPE html>
<html>
 <head>
  <title>Edit</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 </head>
 <body>
 <h2 style="text-align:center;">List </h2>

<div class ="row">
	<div class="col-md-12">
		<br />
		<h3>Edit Your Details</h3>
		<br/>


        @if(Session::has('success'))
                <div class ="alert alert-success">
                    <p>{{Session::get('success')}}</p>
                </div>
                @endif

		<form  action="{{action('UserController@update', $id)}}"   method="post">
			{{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="name" class="form-control" value ="{{$data->name}}" placeholder="Enter Your Name">
                 @if($errors->has('name'))
                            <span class="text-danger">
                                {{$errors->first('name')}}
                            </span>
                            @endif

            </div>
            <div class="form-group">
                <input type="text" name="address" class="form-control" value ="{{$data->address}}" placeholder="Enter Your Address">
                 @if($errors->has('address'))
                            <span class="text-danger">
                                {{$errors->first('address')}}
                            </span>
                            @endif

            </div>
            <div class="form-group">
                <input type="text" name="phone" class="form-control" value ="{{$data->phone}}" placeholder="Enter Your Phone Number">
                  @if($errors->has('phone'))
                            <span class="text-danger">
                                {{$errors->first('phone')}}
                            </span>
                            @endif

            </div>
            <div class="form-group">
                <input type="text" name="state" class="form-control" value ="{{$data->state}}" placeholder="Enter Your State">
                @if($errors->has('state'))
                                  <span class="text-danger">
                                      {{$errors->first('state')}}
                                  </span>
                                  @endif

            </div>
            <div class="form-group">
                <input type="text" name="country" class="form-control" value ="{{$data->country}}" placeholder="Enter Your Country">
                  @if($errors->has('country'))
                            <span class="text-danger">
                                {{$errors->first('country')}}
                            </span>
                            @endif

			</div>

			<div class="form-group">
			<input type="submit"  class="btn  btn-primary" value ="Save">
			</div>
		</form>
	     </div>
        </div>
        </div>
    </body>
</html>
