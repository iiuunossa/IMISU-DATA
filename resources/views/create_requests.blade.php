@extends('layouts.app')

@section('title','Create Request')

@section('content')


<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-12">
            <div class="card p-4 mx-auto" style="margin-top: 15px;">
                <div class="card-header text-dark">
                    <h2>Create Request</h2>
                </div>
                <div class="card-body">
                    <div class="input-group mb-4">
                        <span class="input-group-text">Request</span>
                        <textarea class="form-control" aria-label="detail"></textarea>
                    </div> 
                    
                    <h6 class="mb-3">Requester</h6>
                        <div class="my-3">
                            <div class="form-check">
                                <input id="owner" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="owner">Owner</label>
                            </div>
                            <div class="form-check">
                                <input id="agent" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="owner">Agent</label>
                            </div>
                        </div>                      
                 </div>
            </div>
        </div>
    </div>
</div>

@endsection