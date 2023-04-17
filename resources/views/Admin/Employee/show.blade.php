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
                            <th><b  class="size-details">First Name:</b></th>

                            <span>{{ $employee->First_name }}</span>

                        </div>

                    </div>
                    <hr class="mt-3">

                    <div class="row">
                        <div class="col-4">
                            <th> <b> Last Name:</b></th>
                            <td>{{ $employee->Last_name }}</td>
                        </div>


                    </div>

                    <hr class="mt-3">

                    <div class="row">
                        <div class="col-4">
                            <th> <b> Email :</b></th>
                            <td>{{ $employee->email }}</td>
                        </div>


                    </div>
                    <hr class="mt-3">
                    <div class="row">
                        <div class="col-4">
                            <th> <b> Company  :</b></th>
                            <td>{{ $employee->company->name  }}</td>
                        </div>


                    </div>
                </div>

            </div>
            </div>

        </div>
    </div>
</div>
@endsection
