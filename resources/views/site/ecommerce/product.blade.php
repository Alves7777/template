{{--@extends('site.master.layout')--}}
@extends('layouts.ecommerce')

@section('content')
    <nav class="container navbar navbar-light bg-light">
        <main id="main" data-aos="fade-up">
        <!-- ======= Breadcrumbs ======= -->
        <hr>
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @if(isset($list))
                        @foreach($list as $prod)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <img src="{{asset($prod->photo)}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $prod->name }} </h4>
                                    <h6>R$ {{ $prod->value }}</h6>
                                    <a title="submit" class="btn btn-primary btn-sm" href="{{ route('add_cart', ['product_id' => $prod->id]) }}"><i class="fas fa-shopping-bag"></i>Add Sacola</a>
                                    <a href="/assets/img/portfolio/portfolio-1.jpg" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <hr>
        </section>
    </main><!-- End #main -->
@endsection
