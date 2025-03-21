@extends('_partials.body')

@section('conteudo')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <!-- Cabeçalho com cor personalizada -->
                <div class="card-header text-center" style="background-color: #8C1F28; color: #F2F2F2;">
                    <h3>Cadastro de Usuário</h3>
                </div>
                <div class="card-body" style="background-color: #F2F2F2;">
                    <!-- Formulário de cadastro -->
                    <form method="POST">
                        @csrf
                        
                        <!-- Nome -->
                        <div class="mb-3">
                            <label for="name" class="form-label" style="color: #591C21;">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" required style="border-color: #591C21;">
                        </div>

                        <!-- E-mail -->
                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: #591C21;">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required style="border-color: #591C21;">
                        </div>

                        <!-- Senha -->
                        <div class="mb-3">
                            <label for="password" class="form-label" style="color: #591C21;">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" required style="border-color: #591C21;">
                        </div>

                        <!-- Confirmar Senha -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label" style="color: #591C21;">Confirmar Senha</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required style="border-color: #591C21;">
                        </div>

                        <!-- Botão de Cadastro -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn" style="background-color: #D92525; color: white;">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
