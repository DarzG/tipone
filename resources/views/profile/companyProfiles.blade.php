@extends('layouts.app')

@section('content')
<div class="container" >
   <div class = "row" >
		<div class="col-3" style="border-right: 2px solid #333">
			<div>
				<div><h1>{{$company->company_name}}</h1></div>
				
			</div>
			
			<form action="/profile/p" enctype="multipart/form-data"	method="post">
				@csrf
				<div class="form-group ">
								<label for="f_name" class="col-form-label">{{ __(' Name') }}</label>

								<div class="">
									<input id="f_name" 
										type="text" 
										class="form-control @error('f_name') is-invalid @enderror" 
										name="f_name" 
										value="{{ old('f_name') }}"  
										autocomplete="f_name" autofocus>

									@error('f_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
				</div>
				
				<div class="form-group ">
								<label for="l_name" class="col-form-label">{{ __(' Last Name') }}</label>

								<div class="">
									<input id="l_name" 
										type="text" 
										class="form-control @error('l_name') is-invalid @enderror" 
										name="l_name" 
										value="{{ old('l_name') }}"  
										autocomplete="l_name" autofocus>

									@error('l_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
				</div>
				
				<div class="form-group ">
								<label for="company" class="col-form-label">{{ __(' campany') }}</label>

								<div class="">
									<input id="company" 
										type="text" 
										class="form-control @error('company') is-invalid @enderror" 
										name="company" 
										value="{{$company->company_name}}"  
										autocomplete="company" autofocus>

									@error('company')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
				</div>
				
				<div class="form-group ">
								<label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>

								<div class="">
									<input id="email" 
									type="text" class="form-control @error('email') is-invalid @enderror" 
									name="email" 
									value="{{ old('email') }}"  
									autocomplete="email">

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
				</div>
				
				<div class="form-group ">
								<label for="phone" class=" col-form-label ">{{ __('Phone') }}</label>

								<div class="">
									<input id="phone" 
									type="text" 
									class="form-control @error('phone') is-invalid @enderror" 
									name="phone" 
									value="{{ old('website') }}" autofocus>
										
									@error('phone')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
				</div>
				
				
				<br><br>

				
				<div class="form-group">
								<div>
									<button class="btn-primary ">add Employee</button>
								</div>
				</div>
			</form>
			
		</div>
		<div class="col-8" >
			
			
		</div>
</div>
@endsection
