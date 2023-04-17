<div class="row">
    <div class="col-md-6 mt-2">
        <div class="form-group">
            <label for="First_name">First Name</label>
            <input type="text" class="form-control @error('First_name') is-invalid @enderror" id="First_name"
                name="First_name" @if (isset($employee)) value="{{ $employee->First_name }}" @endif>
            @error('First_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mt-2">
        <div class="form-group">
            <label for="Last_name">Last Name</label>
            <input type="text" class="form-control @error('Last_name') is-invalid @enderror" id="Last_name"
                name="Last_name" @if (isset($employee)) value="{{ $employee->Last_name }}" @endif>
            @error('Last_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!--  col-md-6   -->

    <div class="col-md-6 mt-2">
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email"
                @if (isset($employee)) value="{{ $employee->email }}" @endif>
        </div>
    </div>
    <div class="col-md-6 mt-2 ">
        <div class="form-group">
            <label for="company_id">Company</label>
            <select class="js-example-basic-single form-control" name="company_id" id="company_id">
                @foreach ($companies as $caompany)
                    <option value="{{ $caompany->id }}"
                        @isset($employee)
                @if ($employee->company_id == $caompany->id)
                selected
            @endif
            @endisset>
                        {{ $caompany->name }}
                    </option>
                @endforeach
            </select>

        </div>
    </div>
    <!--  col-md-6   -->

    <div class="col-md-6 mt-2">
        <div class="form-group">
            <label for="number">Phone</label>
            <input type="number" class="form-control" id="imphoneage" name="phone"
                @if (isset($employee)) value="{{ $employee->phone }}" @endif>
        </div>

    </div>
    <!--  col-md-6   -->


</div>
