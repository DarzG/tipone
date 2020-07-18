@extends('layouts.apps')

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
				
				<div>
				<div><strong>add</strong></div>
				<div><strong>update</strong></div>
				<div><strong>delete</strong></div>
				</div>
			</div>
			
			<div>
				<div><h1>Emplpoyee</h1></div>
				
				<div>
				<div><strong>add</strong></div>
				<div><strong>update</strong></div>
				<div><strong>delete</strong></div>
				</div>
			</div>
			
		</div>
		<div class="col-9" >
		
		</div>
	</div>
</div>
@endsection
