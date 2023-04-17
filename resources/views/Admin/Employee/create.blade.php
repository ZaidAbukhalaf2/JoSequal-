@extends('layouts.app')
@section('content')

<div class="wrapper d-flex flex-column min-vh-100  min-admin">

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <h3 class="fw-normal">
                   Create Employee
                </h3>

                <div class="card design-card">
                    <div class="card-body">
                        <form action="{{ route('Employee.store') }}" method="post" >
                            @csrf
                            @include('Admin.Employee.form')
                            <div>
                                <button type="submit" class="btn btn-primary mt-2"> create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


