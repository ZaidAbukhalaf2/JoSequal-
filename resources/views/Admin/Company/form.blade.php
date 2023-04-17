<div class="row">
    <div class="col-md-6 mt-2">
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                @if (isset($company)) value="{{ $company->name }}" @endif>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--  col-md-6   -->

    <div class="col-md-6 mt-2">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder=""
                id="email" name="email" @if (isset($company)) value="{{ $company->email }}" @endif>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--  col-md-6   -->

    <div class="col-md-6 mt-2">
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo"
             @if (isset($company)) value="{{ $company->logo }}" @endif>
             @error('logo')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        </div>
        @if (isset($company->logo))
            <td data-label="logo"><img src="{{ url('storage/company/'. $company->logo) }}" width="60%"></td>
        @endif
    </div>
    <!--  col-md-6   -->
    <div class="col-md-6 mt-2">
        <div class="form-group">
            <label for="website">Website</label>
            <input type="url" class="form-control @error('website') is-invalid @enderror"
                id="website" name="website" @if (isset($company)) value="{{ $company->website }}" @endif>
            @error('website')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>
