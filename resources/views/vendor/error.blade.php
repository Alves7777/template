{{-- mensagem de erro --}}
@if($errors->any())
    <div class="alert alert-danger" role="alert" style="margin: 10px; margin-left: auto">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
