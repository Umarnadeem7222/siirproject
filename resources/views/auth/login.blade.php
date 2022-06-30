@extends('layouts.app') 

@section('content')
<header class="jobguru-header-area stick-top forsticky page-header">
    <div class="menu-animation">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-2">
                <div class="site-logo">
                   <a href="/">
                   <img src="assets/img/logo-2.png" alt="jobguru" />
                   </a>
                </div>
                <!-- Responsive Menu Start -->
                <div class="jobguru-responsive-menu"></div>
                <!-- Responsive Menu Start -->
             </div>
             <div class="col-lg-6">
                <div class="header-menu">
                   <nav id="navigation">
                      <ul id="jobguru_navigation">
                         <li class="active has-children">
                            <a href="#">home</a>
                            <ul>
                               <li><a href="index.html">Home 1</a></li>
                               <li><a href="index-2.html">Home 2</a></li>
                            </ul>
                         </li>
                         <li class=" has-children">
                            <a href="#">for candidates</a>
                            <ul>
                               <li class="has-inner-child">
                                  <a href="#">browse jobs</a>
                                  <ul>
                                     <li><a href="browse-jobs.html">full page grid</a></li>
                                     <li><a href="job-grid-sidebar.html">grid sidebar</a></li>
                                     <li><a href="job-list-sidebar.html">list sidebar</a></li>
                                  </ul>
                               </li>
                               <li><a href="browse-categories.html">Browse Categories</a></li>
                               <li><a href="browse-companies.html">browse companies</a></li>
                               <li><a href="single-candidates.html">candidates details</a></li>
                               <li><a href="submit-resume.html">submit resume</a></li>
                               <li class="has-inner-child">
                                  <a href="#">candidate dashboard</a>
                                  <ul>
                                     <li><a href="candidate-dashboard.html">Candidate dashboard</a></li>
                                     <li><a href="candidate-profile.html">Candidate profile</a></li>
                                     <li><a href="message.html">messages</a></li>
                                     <li><a href="manage-jobs.html">manage jobs</a></li>
                                     <li><a href="candidate-earnings.html">earnings</a></li>
                                     <li><a href="change-password.html">change password</a></li>
                                  </ul>
                               </li>
                            </ul>
                         </li>
                         <li class="has-children">
                            <a href="#">for employers</a>
                            <ul>
                               <li><a href="browse-candidates.html">Browse Candidates</a></li>
                               <li><a href="single-company.html">company details</a></li>
                               <li><a href="post-job.html">Post A job</a></li>
                               <li class="has-inner-child">
                                  <a href="#">employer dashboard</a>
                                  <ul>
                                     <li><a href="employer-dashboard.html">employer dashboard</a></li>
                                     <li><a href="company-profile.html">company profile</a></li>
                                     <li><a href="message.html">messages</a></li>
                                     <li><a href="manage-candidates.html">manage candidates</a></li>
                                     <li><a href="transaction.html">transaction</a></li>
                                     <li><a href="change-password.html">change password</a></li>
                                  </ul>
                               </li>
                            </ul>
                         </li>
                         <li class="has-children">
                            <a href="#">pages</a>
                            <ul>
                               <li><a href="about.html">About us</a></li>
                               <li class="has-inner-child">
                                  <a href="#">blog</a>
                                  <ul>
                                     <li><a href="blog.html">blog</a></li>
                                     <li><a href="single-blog.html">single blog</a></li>
                                  </ul>
                               </li>
                               <li><a href="job-page.html">job page</a></li>
                               <li><a href="/login">login</a></li>
                               <li><a href="/register">register</a></li>
                               <li><a href="/contact">contact us</a></li>
                            </ul>
                         </li>
                      </ul>
                   </nav>
                </div>
             </div>
             <div class="col-lg-4">
                <div class="header-right-menu">
                   <ul>
                      <li><a href="post-job.html" class="post-jobs">Post jobs</a></li>
                      <li><a href="/register"><i class="fa fa-user"></i>sign up</a></li>
                      <li><a href="/login"><i class="fa fa-lock"></i>login</a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </header>
<section class="jobguru-breadcromb-area">
    <div class="breadcromb-top section_100">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="breadcromb-box">
                   <h3>Login</h3>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="breadcromb-bottom">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="breadcromb-box-pagin">
                   <ul>
                      <li><a href="#">home</a></li>
                      <li><a href="#">pages</a></li>
                      <li class="active-breadcromb"><a href="#">Login</a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

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
@endsection
