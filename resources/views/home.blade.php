@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row" style="margin-top: 100px;">
      <div class="col-sm-6 col-lg-6 mx-auto">
        <div class="card p-4 mx-auto">
          <div class="card-body">    
            <h2>Service Logs</h2><hr>
          </div>
          <div class="row p-4 gy-2">
            <button type="button" class="btn btn-primary btn-lg btn-block">Change Request</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">IT Support</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Consent Form VDO</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Gallery</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Issues</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Work Logs</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection