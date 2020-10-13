<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
        <body>
        <h2 style="text-align:center;">Register </h2>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
             @if(Session::has('success'))
                <div class ="alert alert-success">
                    <p>{{Session::get('success')}}</p>
                </div>
                @endif
                <form class="" action="" method="post" autocomplete="off">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email"  placeholder="E-maill" class="form-control">
                         
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="Password"  placeholder="Password" class="form-control">
                       
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="Password"  placeholder="Password" class="form-control">
                       
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="Password"  placeholder="Password" class="form-control">
                       
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="Password"  placeholder="Password" class="form-control">
                       
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="Password"  placeholder="Password" class="form-control">
                       
                    </div>
                  
                    <div class="form-group">
                        <tr><input type="submit" name="button" class="btn btn-success" value="Login" />
                        <td><a class="btn btn-danger" href="register">New Register</a></td></tr>
                    </div>
                </form>
                    </div>
                    </div>
            </body>
        </html>
