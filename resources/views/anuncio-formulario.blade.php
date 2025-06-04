<form action="{{ route('anuncio-store') }}" method="post">
    @csrf
    <label for="titulo">titulo</label>
    <input type="text" name="titulo" id="titulo">

    <label for="descricao">descricao</label>
    <input type="text" name="descricao" id="descricao">

    <label for="preco">preco</label>
    <input type="text" name="preco" id="preco">

    <button type="submit">Cadastrar</button>
</form>