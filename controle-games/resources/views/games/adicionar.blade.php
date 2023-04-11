<x-layout title="Novo game">
    <form action="/games/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-success">Salvar</button>
            {{-- <button type="submit" class="btn btn-danger">Cancelar</button> --}}
        </div>
    </form>
</x-layout>
