<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
    <link rel="stylesheet" href="{{url('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/bootstrap/css/font-awesome/css/font-awesome.min.css')}}">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-sm-4 col-md-4 lg-5 mx-auto">
          <div class="card p-4 mx-auto">
            <div class="card-header text-dark">
              <h2>Login</h2>
            </div>
              <div class="card-body">  
                <div class="row p-4 gy-2">
                    <div class="input-group mb-4" style="margin-top: 10px;">
                        <span class="input-group-text" id="username"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="username" aria-describedby="username">
                    </div>
                    <div class="input-group mb-4" style="margin-top: 10px;">
                        <span class="input-group-text" id="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Password" aria-label="password" aria-describedby="password">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Login</button>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>




