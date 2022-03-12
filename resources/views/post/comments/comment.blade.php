<hr>

@if(auth()->check())
    <form action="#" method="post" class="form">
        @csrf
        <input type="hidden" name="post_id" value="{{ $posts->id }}">
        <div class="form-group">
            <input type="text" name="title" placeholder="Título" class="form-control">
        </div>
        <div class="form-group">
            <textarea type="text" cols="30" rows="5" placeholder="Comentarios"
                      class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
@else
    <p>Precisa está logado. <a href="{{ route('login') }}">Clique aqui pra entrar!</a></p>
@endif
