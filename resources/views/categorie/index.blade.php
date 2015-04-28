@extends('template.back')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <a href="{!!url('/categorie/create')!!}" class="btn btn-success">{!!Lang::choice('messages.nuova_categoria',0)!!}</a>
    </div>
</div>
<div class='row'>
    <div class="col-xs-12">
        {!! $categorie_lista->render() !!}
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-responsive">
            <thead>        
                <tr>
                    <th>{!!Lang::choice('messages.titolo_index_categoria_nome',0)!!}</th>
                    <th>{!!Lang::choice('messages.titolo_azioni',0)!!}</th>
                </tr>
            </thead>
            @foreach($categorie_lista as $categoria)
            <tr> 
                <td>{!!@$categoria['nome']!!}</td>
                <td>
                    <a href="{!!url('/categorie/'.$categoria['id'].'/edit')!!}" class="btn btn-primary">{!!Lang::choice('messages.pulsante_modifica',0)!!}</a>
                    <a href="{!!url('/categorie/'.$categoria['id'])!!}" class="btn btn-danger btn-cancella" data-token="<?= csrf_token() ?>">{!!Lang::choice('messages.pulsante_elimina',0)!!}</a>
                </td>
            </tr> 
            @endforeach      
        </table>
    </div>
</div>

@stop