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
		<div class="col-9 p-3" >
			<div class="d-flex">
				<div class ="pr-4"><strong>add</strong></div>
				<div class ="pr-4"><strong>edit</strong></div>
				<div class ="pr-4"><strong>delete</strong></div>
			</div>
		</div>
	</div>
</div>
@endsection
