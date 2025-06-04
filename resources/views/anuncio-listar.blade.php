<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Data_publicação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>id: 0</td>
                <td>Titulo: Wolksvagem</td>
                <td>Descrição: Fusca</td>
                <td>Preço: 1945</td>
                <td>
				    <a href="/veiculo/remove/0">Excluir</a>
                    <a href="/veiculo/update/0">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- {{ $clientes->links() }} --}}