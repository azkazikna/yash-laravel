@extends('layouts/master-error')

@section('title', 'Error 400')
    
@section('content')
<div class="container h-100">
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
            <div class="error-page">
                    <div class="error-inner text-center">
                    <div class="dz-error" data-text="404">404</div>
                    <h4 class="error-head"><i class="fa fa-exclamation-triangle text-warning"></i> The page you were looking for is not found!</h4>
                    
                <div>
                   <a href="/" class="btn btn-secondary">BACK TO HOMEPAGE</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection