<form action="{{ route('proprietario-store') }}" method="post">
    @csrf
    <label for="nome">nome</label>
    <input type="text" name="nome" id="nome">

    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf">

    <label for="telefone">telefone</label>
    <input type="text" name="telefone" id="telefone">

    <label for="email">email</label>
    <input type="text" name="email" id="email">

    <button type="submit">Cadastrar</button>
</form>