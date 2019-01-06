@extends('layouts.selectaccount')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-pricing popular shadow text-center px-3 mb-4">
                <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Service1</span>
                <div class="bg-transparent card-header pt-4 border-0">
                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">$<span class="price">6</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                </div>
                <div class="card-body pt-0">
                    <ul class="list-unstyled mb-4">
                        <li>Monthly updates</li>
                        <li>Free cancelation</li>
                    </ul>
                    <a href="{{ route('dashboard') }}" target="" class="btn btn-primary mb-3">Select Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-pricing popular shadow text-center px-3 mb-4">
                <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Service1</span>
                <div class="bg-transparent card-header pt-4 border-0">
                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">$<span class="price">6</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                </div>
                <div class="card-body pt-0">
                    <ul class="list-unstyled mb-4">
                        <li>Monthly updates</li>
                        <li>Free cancelation</li>
                    </ul>
                    <a href="{{ route('dashboard') }}" target="" class="btn btn-primary mb-3">Select Now</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
