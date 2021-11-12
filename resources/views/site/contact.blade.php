<link href="{{ asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">
<link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{ asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{ asset('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

{{--TELA DE TESTES--}}

@foreach($responseGet as $item)
    <div class="col-md-6">
        <ul class="list-group">
            <li class="list-group-item active">{{ $item['plate']}}</li>
            <li class="list-group-item">{{ $item['vehicle_owner'] }}</li>
            <li class="list-group-item">{{ $item['cost_of_freight'] }}</li>
            <li class="list-group-item">{{ $item['start_date'] }}</li>
            <li class="list-group-item">{{ $item['end_date'] }}</li>
            <li class="list-group-item">{{ $item['status'] }}</li>
        </ul>
    </div>
@endforeach

{{--@endsection--}}
