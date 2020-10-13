<!DOCTYPE html>
<html>
    <head>
    <title>Register</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
        <body>
        <h2 style="text-align:center;">Register page </h2>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
             @if(Session::has('success'))
                <div class ="alert alert-success">
                    <p>{{Session::get('success')}}</p>
                </div>
                @endif
                <form class="" action="{{URL::to('/store')}}" method="post" autocomplete="off">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"  placeholder="Name" class="form-control">
                          @if($errors->has('name'))
                            <span class="text-danger">
                                {{$errors->first('name')}}
                            </span>
                            @endif
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address"  placeholder="address" class="form-control">
                          @if($errors->has('address'))
                            <span class="text-danger">
                                {{$errors->first('address')}}
                            </span>
                            @endif
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone"  placeholder="Phone Number" class="form-control">
                          @if($errors->has('phone'))
                            <span class="text-danger">
                                {{$errors->first('phone')}}
                            </span>
                            @endif

                            <div class="form-group">
                              <label>State</label>
                              <input type="text" name="state"  placeholder="State" class="form-control">
                                @if($errors->has('state'))
                                  <span class="text-danger">
                                      {{$errors->first('state')}}
                                  </span>
                                  @endif
                    </div>


                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="country"  placeholder="Country" class="form-control">
                          @if($errors->has('country'))
                            <span class="text-danger">
                                {{$errors->first('state')}}
                            </span>
                            @endif
              </div>
                    <div class="form-group">
                        <tr><input type="submit" name="button" class="btn btn-success" value="Register" />
                        <td><a class="btn btn-danger" href="list">Cancel</a></td></tr>
                    </div>
                </form>
                    </div>
                    </div>
            </body>
        </html>
