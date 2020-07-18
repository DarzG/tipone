@extends('layouts.app')

@section('content')
<div class="container" >
    <!---div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div-->
	
	<div class = "row" >
		<div class="col-4" style="border-right: 2px solid #333">
			<div>
				<div><h1>Companies</h1></div>
				
			</div>
			<div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label">{{ __('website') }}</label>

                            <div class="">
                                <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" website="website" value="{{ old('website') }}" required autocomplete="website" autofocus>

                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            </div>
			
			<div class="form-group row">
                            <label for="company_email" class="col-md-4 col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="company_email" type="company_email" class="form-control @error('company_email') is-invalid @enderror" website="company_email" value="{{ old('company_email') }}" required autocomplete="company_email">

                                @error('company_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            </div>
			<div class="row">
				<label for="image" class="col-md-4 col-form-label ">logo</label>
				<div class="col-md-5">
					<input type="file", class="form-control-file" id="image" name="campany_logo">
					@error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
				</div>
				
			</div>
			
			<div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label ">{{ __('website') }}</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" website="website" value="{{ old('website') }}" required autocomplete="website" autofocus>
									
								@error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            </div>
			
			<div class="form-group row">
				<button class="btn-primary">add company</button>
			</div>
			
		</div>
		<div class="col-8" >
			<div><h4>company1</h4><div>
			<div><h4>company2</h4><div>
			<div><h4>company3</h4><div>
			<div><h4>company4</h4><div>
			<div><h4>company5</h4><div>
			
			
		</div>
		
	</div>
</div>
@endsection
