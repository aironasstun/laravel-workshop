@extends('layouts.app')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">Portfolio</div>
        </div>
    </header>
    <!-- Random section -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">{{ $portfolio->title }}</h2>
{{--                <h3 class="section-subheading text-muted">Yes</h3>--}}
            </div>
            <div class="row text-center">
                <p>
                    {{ $portfolio->portfolio_text }}
                </p>
            </div>
        </div>
    </section>
@endsection
