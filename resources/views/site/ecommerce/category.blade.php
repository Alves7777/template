{{--@extends('site.master.layout')--}}
@extends('layouts.ecommerce')

@section('content')
    @if(isset($listCategory) && count($listCategory) > 0)
        <main id="main" data-aos="fade-up">
            <!-- ======= Breadcrumbs ======= -->
            <h1>Categoria</h1>

            <ul>
                <li><a>{{ route('category') }}</a>Todas</li>
                @foreach($listCategory as $cat)
                    <li><a href="{{route('category_por_id', ['category_id'=>$cat->id ])}}">{{ $cat->category }}</a></li>
                @endforeach
            </ul>
            @endif
            </div>
            <div class="col-10">
                @include("site.ecommerce.product", ['list' => $listProduct])
            </div>
            </div>
        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
@endsection
