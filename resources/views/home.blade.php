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
		<div class="col-3" >
			<div>
				<div><h1>Companies</h1></div>
				
			</div>
			
			
		</div>
		<div class="col-9 offset-2" >
			<div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('website') }}</label>

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
                            <label for="company_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="company_email" type="company_email" class="form-control @error('company_email') is-invalid @enderror" website="company_email" value="{{ old('company_email') }}" required autocomplete="company_email">

                                @error('company_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            </div>
			<div class="row">
				<label for="image" class="col-md-4 col-form-label text-md-right">logo</label>
				<div class="col-md-6">
					<input type="file", class="form-control-file" id="image" name="campany_logo">
					@error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
				</div>
				
			</div>
			
			<div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('website') }}</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" website="website" value="{{ old('website') }}" required autocomplete="website" autofocus>
									<div>
										<button class="btn-primary">add company</button>
									</div>
								@error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            </div>
			
			
		</div>
		
	</div>
</div>
@endsection
