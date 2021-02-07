@extends('layouts.app_cr')

@section('title','IMISU-Application')

@section('content')


<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-12">
            <div class="card p-4 mx-auto" style="margin-top: 15px;">
                <div class="card-header text-dark">
                    <h2>Internal Medicine Applications</h2>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary">New Application</button>
                    
                    <div class="container bg-light" style="margin-top: 10px;" >
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">App_Name</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Golive</th>
                                <th scope="col">Status</th>
                                <th scope="col">Developer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>MedSiCon</td>
                                <td>01 Jun 2017 - 30 Sep 2020</td>
                                <td>22 Mar 2018</td>
                                <td>On Service</td>
                                <td>Nongnapat, Sansanee</td>
                                </tr>

                                <tr>
                                <td>MED-VDO</td>
                                <td>01 Jan 2018 - 30 Sep 2018</td>
                                <td>1 Mar 2018</td>
                                <td>On Service</td>
                                <td>Koramit, Sansanee</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div>
    </div>
<div>  

@endsection
