<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
    <link rel="stylesheet" href="{{url('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/font-awesome/css/fontawesome.min.css')}}">
    <title>Dashboard</title>
  </head>
  <body>
    <div class="container">
      <div class="row" style="margin-top: 100px;">
        <div class="col-sm-4 col-md-6 lg-6 mx-auto">
          <div class="card p-4 mx-auto">
            <div class="card-header text-dark">
              <h2>IMISU-DATA</h2>
            </div>
              <div class="card-body">  
                <div class="row p-4 gy-2">
                  <a class="btn btn-lg btn-primary" href="{{ url('/crs') }}">Service Logs</a>
                  <a class="btn btn-lg btn-primary" href="#">iWorks</a>
                  <a class="btn btn-lg btn-primary" href="#">Manuals</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

