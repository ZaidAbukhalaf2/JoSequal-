@extends('layouts.app')
@section('content')
<div class="wrapper d-flex flex-column min-vh-100 min-admin">

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 mt-2">

            <div class="card design-card">
                <div class="card-header card-header-border-bottom">
                    <h2>Details</h2>
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-4">
                            <th><b  class="size-details">Name:</b></th>

                            <span>{{ $company->name }}</span>

                        </div>

                    </div>
                    <hr class="mt-3">

                    <div class="row">
                        <div class="col-4">
                            <th> <b> Email:</b></th>
                            <td>{{ $company->email }}</td>
                        </div>


                    </div>

                    <hr class="mt-3">

                    <div class="row">
                        <div class="col-4">
                            <th> <b> Website:</b></th>
                            <td>{{ $company->website}}</td>
                        </div>


                    </div>

                </div>

            </div>
            </div>
            <div class="col-md-4 ">
                <div class="mb-2">

                </div>
                <div class="card design-card">
                    <div class="card-body">
                        <div class="card-title">
                            <span class="mb-4">Logo</span>

                        </div>
                        <img src="{{url('storage/company/'.$company->logo)}}" width="100%">                    </div>
                </div>
                </div>
        </div>
    </div>
</div>
@endsection
