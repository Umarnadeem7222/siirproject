@extends('layouts.app')

@section('content')
<section class="jobguru-breadcromb-area">
    <div class="breadcromb-top section_100">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="breadcromb-box">
                   <h3>Register</h3>
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
                      <li class="active-breadcromb"><a href="#">Register</a></li>
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
    </div>
</div>
@endsection
