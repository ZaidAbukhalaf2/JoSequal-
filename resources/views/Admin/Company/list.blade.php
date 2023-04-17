@extends('layouts.app')
@section('content')
<div class="wrapper d-flex flex-column min-vh-100  min-admin">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <div class="card-header mt-5 d-flex  justify-content-between">
                    <h3 class="fw-normal">
                        Companies List
                    </h3>
                    <div>
                        <a type="button" class="btn btn-outline-primary" href="{{ route('Company.create') }}">Create</a>
                    </div>
                </div>
                <div class="card mt-3 design-card ">
                    <div class="card-body">
                        <table id="datatable" class="table table-striped design-card table-responsive" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th >Name</th>
                                    <th >Email</th>
                                    <th>website</th>
                                    <th >Logo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach ($companies as $company)
                                    <tr>
                                        <td data-label="id">{{ $company->id }}</td>
                                        <td data-label="name">{{ $company->name }}</td>
                                        <td data-label="email">{{ $company->email }}</td>
                                        <td data-label="website"> {{ $company->website}}</td>
                                        <td data-label="logo"><img src="{{url('storage/company/'.$company->logo)}}" width="100px"></td>
                                        <td data-label="Actions">
                                            <a href="{{ route('Company.edit',$company->id) }}" class="me-2"><i class="fa fa-pencil-square-o link-dark fs-3"></i></a>
                                            <a href="{{ route('Company.show',$company->id) }}" class="me-2"> <i class="icon link-dark mt-2 fa fa-eye fs-3"></i></a>

                                            <form method="POST" action="{{ route('Company.destroy',$company->id) }}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-default show_confirm " data-toggle="tooltip" title='Delete'><i class="fa fa-trash-o fs-3"></i>
                                                </button>

                                            </form>
                                            </td>
                                    </tr>
                                    @endforeach

                                </tbody>

                        </table>

                    </div>

                </div>
                <div class="max-auto pd-10 w-4/5">
                    {{$companies->links()}}
                </div>
            </div>

        </div>

    </div>
</div>

<script type="text/javascript">

    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
             title: `Are you sure you want to delete this record?`,
             text: "If you delete this, it will be gone forever.",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
             form.submit();
           }
         });
     });

</script>
@endsection

