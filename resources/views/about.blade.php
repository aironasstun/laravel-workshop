@extends('layouts.app')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">Information about me</div>
        </div>
    </header>
<!-- Random section -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About me</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum massa leo, vitae sodales
                    nisi fermentum sit amet. Fusce nec velit nisl. Nam auctor interdum lorem, vitae viverra nunc ultricies
                    ac. Aliquam in orci vitae urna ultricies commodo eu at orci. Vestibulum iaculis metus nec erat rutrum
                    dapibus. Praesent nec posuere tellus. Aenean a elit odio.
                </p>

                <p>
                    Duis malesuada semper elit at interdum. Nulla ornare mauris enim, id bibendum libero suscipit ut.
                    Curabitur lorem erat, lacinia id nibh id, ornare tincidunt ligula. Suspendisse molestie neque sed
                    est ultricies faucibus. Quisque justo mi, fringilla at augue vel, mollis vestibulum nisi. In venenatis
                    ipsum eu gravida hendrerit. Donec bibendum urna sed lectus volutpat aliquet. Praesent posuere tortor
                    vel turpis imperdiet, id egestas quam sollicitudin. Nunc eget imperdiet orci, in posuere elit. Etiam at
                    dictum sapien, sed dignissim nisi. Duis dignissim nunc purus. Aliquam posuere diam eu sem luctus
                    ultricies at non massa. Donec cursus sagittis mauris, et lacinia neque efficitur vel. Mauris enim erat,
                    efficitur interdum luctus in, cursus et metus. Sed nec massa non sem gravida vulputate.
                </p>

                <p>
                    Curabitur in varius nunc, ut scelerisque lectus. Proin sit amet fringilla magna, sit amet ornare dolor.
                    Aliquam suscipit, velit sit amet consequat egestas, tellus felis placerat felis, et mollis mauris orci
                    ac ex. Sed malesuada turpis quam, in blandit velit semper sed. In bibendum placerat elit et condimentum.
                    Donec ac maximus neque, vel scelerisque ante. Sed vulputate lorem nisl, sit amet consequat justo mattis
                    dictum. Phasellus suscipit, tortor nec finibus bibendum, sapien sapien dignissim arcu, vitae vestibulum
                    nulla neque quis tellus. Integer tristique pellentesque tortor in tempor. Nulla porta sit amet ante id
                    laoreet.
                </p>

                <p>
                    Aliquam eu blandit lorem, ut rutrum sapien. Curabitur semper libero urna, sit amet sagittis elit
                    consequat non. Phasellus molestie lobortis sapien, vitae egestas quam dapibus nec. Donec consequat
                    erat dui, id dignissim nisi consequat vel. Aliquam non semper tellus, quis dictum justo. Fusce laoreet
                    egestas neque quis ullamcorper. Proin diam purus, maximus nec magna sit amet, vestibulum pretium diam.
                    Nunc posuere nulla ac ligula aliquam interdum. Nam laoreet ante id ultrices sodales.

                    Integer semper, quam sed consectetur fringilla, risus tellus laoreet mi, sit amet pharetra lectus
                    ligula ac nunc. Nam euismod, turpis et facilisis hendrerit, augue dolor venenatis sapien, sed feugiat
                    ante metus quis urna. Ut in rutrum tellus. Cras consequat metus eget dui rutrum venenatis. Vestibulum
                    malesuada condimentum pharetra. Sed vel ante ac nisl tempus blandit. Suspendisse id ultrices magna.
                    Proin egestas lorem id arcu commodo mollis. Suspendisse vitae neque sed velit pulvinar condimentum a
                    a ipsum.
                </p>
            </div>
        </div>
    </section>
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Experience</h2>
                <h3 class="section-subheading text-muted">I have knowledge on these things</h3>
            </div>
            <div class="container">
                <div class="row text-center">
                    @foreach($technologies as $technology)
                    <div class="col-md-4">
                        <h2><a href="{{ route('about') }}?technology_id={{ $technology->id }}">{{ $technology->name }}</a></h2>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="container">
                <div class="row text-center">
                    @foreach($portfolios as $portfolio)
                        <div class="card col-md-12 m-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ $portfolio->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $portfolio->title }}</h6>
                                <p class="card-text">{{ $portfolio->portfolio_text }}</p>
                                <a href="{{ route('portfolios.show', $portfolio->id) }}" class="card-link">Link...</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
