@extends('layouts.auth')
@section('tab-title')
				{{ __('Verify') }}
@endsection
@section('content')
				<div class="codex-authbox">
								<div class="auth-header">
												<div class="auth-icon"><i class="fa fa-unlock-alt"></i></div>
												<h3>{{ __('Verify Your Email Address') }}</h3>
												@if (session('resent'))
																<div class="alert alert-success" role="alert">
																				{{ __('An email has been sent with your account deatils.') }}
																</div>
												@endif
												<form action="/aws/register" method="POST">
													@csrf
																<div class="form-group">
																				<label for="email">Email Address</label>
																				<input type="email" class="form-control" placeholder="Please enter your email address">
																</div>
																<div class="form-group">
																				<button type="submit" class="btn btn-primary btn-sm">Create Account</button>
																</div>
												</form>
								</div>
								<div class="auth-footer">
								</div>
				</div>
@endsection
