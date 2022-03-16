@extends('layouts.app')
@section('title', 'Login')
@section('user_content')

<!-- Start Account Login Area -->
<div class="account-login section">
	<div class="container">
			<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
							<form class="card login-form" method="post" action="{{ route('login') }}">
								@csrf
									<div class="card-body">
											<div class="title">
													<h3 class="text-center">Login</h3
											</div>
											<div class="form-group input-group">
													<label for="reg-fn">Email</label>
													<input class="form-control" type="email" id="" name="email" >
													@error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
											</div>
											<div class="form-group input-group">
													<label for="reg-fn">Password</label>
													<input class="form-control" type="password" id="" name="password" >
													@error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
											</div>
											<div class="d-flex flex-wrap justify-content-between bottom-content">
													<div class="form-check">
															<input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
															<label class="form-check-label">Remember me</label>
													</div>
													<a class="lost-pass" href="account-password-recovery.html">Forgot password?</a>
											</div>
											<div class="button">
													<button class="btn" type="submit">Login</button>
											</div>
											<p class="outer-link">Don't have an account? <a href="register.html">Register</a> here.</p>
											<div class="alt-option">
												<span>Or</span>
											</div>
											<div class="social-login">
												<div class="row">
														<div class="col-lg-4 col-md-4 col-12"><a class="btn facebook-btn"
																		href="javascript:void(0)"><i class="lni lni-facebook-filled"></i> Facebook
																		login</a></div>
														<div class="col-lg-4 col-md-4 col-12"><a class="btn twitter-btn"
																		href="javascript:void(0)"><i class="lni lni-twitter-original"></i> Twitter
																		login</a></div>
														<div class="col-lg-4 col-md-4 col-12"><a class="btn google-btn"
																		href="javascript:void(0)"><i class="lni lni-google"></i> Google login</a>
														</div>
												</div>
										</div>
									</div>
							</form>
					</div>
			</div>
	</div>
</div>
<!-- End Account Login Area -->

{{-- <div class="container">
	<div class="row justify-content-center">
			<div class="col-md-8">
					<div class="card">
							<div class="card-header">{{ __('Login') }}</div>

							<div class="card-body">
									<form method="POST" action="{{ route('login') }}">
											@csrf

													<label for="email" class="">{{ __('Email Address') }}</label>

															<input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

															@error('email')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>

											<div class="row mb-3">
													<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

													<div class="col-md-6">
															<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

															@error('password')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
													</div>
											</div>

											<div class="row mb-3">
													<div class="col-md-6 offset-md-4">
															<div class="form-check">
																	<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

																	<label class="form-check-label" for="remember">
																			{{ __('Remember Me') }}
																	</label>
															</div>
													</div>
											</div>

											<div class="row mb-0">
													<div class="col-md-8 offset-md-4">
															<button type="submit" class="btn btn-primary">
																	{{ __('Login') }}
															</button>

															@if (Route::has('password.request'))
																	<a class="btn btn-link" href="{{ route('password.request') }}">
																			{{ __('Forgot Your Password?') }}
																	</a>
															@endif
													</div>
											</div>
									</form>
							</div>
					</div>
			</div>
	</div>
</div>  --}}

@endsection



{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
