<x-layout title="Games">
    <div>
        <a href="/games/adicionar" class="btn btn-primary mb-2" role="button" >Adicionar</a>
    </div>
    <div>
    <ul class="list-group">
         @foreach($games as $game)
        <li class="list-group-item">{{$game->nome}}</li>
         @endforeach
    </ul>
    </div>
</x-layout>
