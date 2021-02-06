@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row" style="margin-top: 100px";>
        <div class="col-sm-4 col-md-6 lg-8 mx-auto">
            <div class="card p-4 mx-auto">
                <div class="card-header text-dark">
                    <h2>Service Logs</h2>
                </div>
                    <div class="card-body">
                        <div class="row p-4 gy-2">
                            <button type = "button" class="btn btn-primary btn-lg btn-block">Change Request</button>
                            <button type = "button" class="btn btn-primary btn-lg btn-block">IT Support</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection