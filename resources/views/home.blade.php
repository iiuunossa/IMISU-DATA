@extends('layouts.app')
@section('content')
<style>

      body {
        font-family: 'Nunito', sans-serif;
        background-color: #ccfff5;
        font-size: 16px !important;
      }
      table {
        font-size: 14.5px;
      }
      td {
        padding: 7px !important; 
      }
    </style>
      <style type="text/css">
    body {
      background: #dcdcdc !important;	
    }
    .card {
      width: 35rem;
      border-radius: 0px !important;
      background: #f8f8f8 !important;
    }
  </style> 

  <div class="container">
    <div class="row" style="margin-top: 100px;">
      <div class="col-12">
        <div class="card p-4 mx-auto">
          <div class="card-body">    
            <h2>Service Logs</h2><hr>
          </div>
          <div class="row gy-2">
            <button type="button" class="btn btn-primary btn-lg btn-block">Change Request</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">IT Support</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Gallery</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Issues</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Work Logs</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row" style="margin-top: 100px;">
      <div class="col-12">
        <div class="card p-4 mx-auto">
          <div class="card-body">    
            <h2>Documents</h2><hr>
          </div>
          <div class="row gy-2">
            <button type="button" class="btn btn-primary btn-lg btn-block">Manuals</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Reports</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection