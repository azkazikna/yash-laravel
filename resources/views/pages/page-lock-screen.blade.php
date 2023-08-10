@extends('layouts/master-error')

@section('title', 'Lock Screen')

@section('content')
<div class="container h-100">
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
            <div class="authincation-content">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="auth-form">
                            <div class="text-center mb-3">
                                <a href="/"><img src="{{ asset('assets') }}/images/logo/logo-full.png" alt=""></a>
                            </div>
                            <h4 class="text-center mb-4">Account Locked</h4>
                            <form action="/">
                                <div class="mb-3">
                                    <label><strong>Password</strong></label>
                                    <input type="password" class="form-control" value="Password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Unlock</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection