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
		<div class="col-3" style="border-right: 2px solid #333">
			<div>
				<div><h1>Companies</h1></div>
				
			</div>
			
			<form method="POST" action="">
				<div class="form-group ">
								<label for="website" class="col-form-label">{{ __('Company Name') }}</label>

								<div class="">
									<input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('company_name') }}" required autocomplete="name" autofocus>

									@error('website')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
				</div>
				
				<div class="form-group ">
								<label for="website" class="col-form-label">{{ __('E-Mail Address') }}</label>

								<div class="">
									<input id="website" type="website" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}" required autocomplete="email">

									@error('website')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
				</div>
				
				<div class="form-group">
								<label for="image" class="col-form-label ">{{ __('logo') }}</label>
								<div class="">
									<input type="file", class="form-control-file" id="image" name="campany_logo">
									@error('image')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
									@enderror
								</div>
					
				</div>
				
				<div class="form-group ">
								<label for="website" class=" col-form-label ">{{ __('website') }}</label>

								<div class="">
									<input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}" autofocus>
										
									@error('website')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
				</div>
				
				<div class="form-group">
								<div>
									<button class="btn-primary ">add company</button>
								</div>
				</div>
			</form>
			
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
