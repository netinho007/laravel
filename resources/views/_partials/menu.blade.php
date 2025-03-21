    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adoção de Animais</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('view-inicio')}}">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('view-registrar')}}">Registre-se</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('view-adocao')}}">Adote</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('view-cadastro-animal')}}">Cadastrar animal</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar animais" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>