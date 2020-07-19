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
			
			<form action="/p" enctype="multipart/form-data"	method="post">
				@csrf
				<div class="form-group ">
								<label for="company_name" class="col-form-label">{{ __('Company Name') }}</label>

								<div class="">
									<input id="company_name" 
										type="text" 
										class="form-control @error('company_name') is-invalid @enderror" 
										name="company_name" 
										value="{{ old('company_name') }}"  
										autocomplete="name" autofocus>

									@error('company_name')
										
										<strong>{{ $message }}</strong>
										
									@enderror
								</div>
				</div>
				
				<div class="form-group ">
								<label for="company_email" class="col-form-label">{{ __('E-Mail Address') }}</label>

								<div class="">
									<input id="company_email" 
									type="text" class="form-control @error('company_email') is-invalid @enderror" 
									name="email" 
									value="{{ old('company_email') }}"  
									autocomplete="email">

									@error('company_email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
				</div>
				
				<div class="form-group">
								<label for="image" class="col-form-label ">{{ __('logo') }}</label>
								<div class="">
									<input type="file" class="form-control-file" id="image" name="image">
									@error('image')
													
										<strong>{{ $message }}</strong>
													
									@enderror
								</div>
					
				</div>
				
				<div class="form-group ">
								<label for="website" class=" col-form-label ">{{ __('website') }}</label>

								<div class="">
									<input id="website" 
									type="text" 
									class="form-control @error('website') is-invalid @enderror" 
									name="website" 
									value="{{ old('website') }}" autofocus>
										
									@error('website')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
				</div>
				
				
				<br><br>

				
				<div class="form-group">
								<div>
									<button class="btn-primary ">add company</button>
								</div>
				</div>
			</form>
			
		</div>
		<div class="col-8" >
			@foreach ($companies as $companies)
				
				<div class="row justify-content-between align-items-baseline" >
					<div>
						<img src="/storage/{{$companies->image}}" >
					</div>
					
					<div>
						 <h1><a href="/profile/p/{{$companies->id}}">{{$companies->company_name}}</a></h1>
						 <h5>{{$companies->email}}</h5>
						 <h5>{{$companies->website}}</h5>
						 <h5>Employees</h5>
					</div>
					<div >
						<h6><a href="#">Delete</a></h6>
						<h6><a href="#">Add Employee</a></h6>
						<h6><a href="#">Edit</a></h6>
						
					</div>
				</div>
			@endforeach
			
		</div>
		
	</div>
</div>
@endsection
