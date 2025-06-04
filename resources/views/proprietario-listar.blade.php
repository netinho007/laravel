<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>id: 0</td>
                <td>nome: Wolksvagem</td>
                <td>cpf: Fusca</td>
                <td>telefone: 1945</td>
                <td>email: ABC-1234</td>
                <td>
					<a href="/veiculo/remove/0">Excluir</a>
                    <a href="/veiculo/update/0">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- {{ $clientes->links() }} --}}