@extends('layouts.app_cr')
@section('content')
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-12">
            <div class="card p-4 mx-auto" style="margin-top: 15px;">
                <div class="card-header text-dark">
                    <h2>Internal Medicine Applications</h2>
                </div>
                <div class="card-body"> 

                    <div class="input-group mb-4" style="margin-top: 10px;">
                        <span class="input-group-text" id="app_name">Application Name</span>
                        <input type="text" class="form-control" placeholder="" aria-label="app_name" aria-describedby="app_name">
                    </div>

                    <div class="input-group mb-4">
                        <span class="input-group-text">Begin Date</span>
                        <input type="date" class="form-control" placeholder="" aria-label="beg_date">
                        <span class="input-group-text">End Date</span>
                        <input type="date" class="form-control" placeholder="" aria-label="end_date">
                        <span class="input-group-text">Go Live</span>
                        <input type="date" class="form-control" placeholder="" aria-label="golive_date">
                    </div>

                    <div class="input-group mb-4">
                        <label class="input-group-text" for="technology">Technology</label>
                        <select class="form-select" id="technology">
                            <option selected></option>
                            <option value="1">Pure PHP</option>
                            <option value="2">PHP Framework Laravel</option>
                            <option value="3">PHP Framework Laravel-7</option>
                            <option value="4">MS Access</option>
                        </select>

                        <label class="input-group-text" for="status">Status</label>
                        <select class="form-select" id="status">
                            <option selected></option>
                            <option value="1">On Service</option>
                            <option value="2">Off Service</option>
                        </select>
                    </div>

                    <div class="input-group mb-4">
                        <span class="input-group-text" id="developer">Developer</span>
                        <input type="text" class="form-control" placeholder="" aria-label="developer" aria-describedby="developer">
                    </div>

                    <div class="input-group mb-4">
                        <span class="input-group-text">Detail</span>
                        <textarea class="form-control" aria-label="detail"></textarea>
                    </div>

                    <div class="input-group mb-4">
                        <span class="input-group-text">Remark</span>
                        <textarea class="form-control" aria-label="remark"></textarea>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2 col-2" type="button">Save</button>
                        <button class="btn btn-danger col-2" type="button">Cancel</button>
                    </div>
                                            
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection