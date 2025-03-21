@extends('_partials.body')
@section('conteudo')
  <body>
   
    <!-- Hero Section -->
    <section class="hero-section">
      <h1>Encontre seu novo melhor amigo!</h1>
      <p>Adote um animal e transforme a vida dele e a sua!</p>
      <a href="/registrar" class="btn btn-custom btn-lg">Adote agora</a>
    </section>

    <!-- Animais Disponíveis -->
    <div class="container mt-5">
      <h2 class="text-center mb-4" style="color: #044040;">Animais disponíveis para adoção</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRExz9aytWpI7Pzdftq8TnaaNqyXTBenlgjCg&s/300x200" class="card-img-top" alt="Animal 1">
            <div class="card-body">
              <h5 class="card-title">Nome do Animal</h5>
              <p class="card-text">Descrição curta sobre o animal. Ele é adorável e precisa de um lar.</p>
              <a href="#" class="btn btn-custom">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREojFoa1us5B-jA4_krf2u5M5EkeKHfTUmlw&s/300x200" class="card-img-top" alt="Animal 2">
            <div class="card-body">
              <h5 class="card-title">Nome do Animal</h5>
              <p class="card-text">Descrição curta sobre o animal. Ele é adorável e precisa de um lar.</p>
              <a href="#" class="btn btn-custom">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5kNkJhVMd2Fag48N_vebkwKrhTJMq-V7Ayw&s/300x200" class="card-img-top" alt="Animal 3">
            <div class="card-body">
              <h5 class="card-title">Nome do Animal</h5>
              <p class="card-text">Descrição curta sobre o animal. Ele é adorável e precisa de um lar.</p>
              <a href="#" class="btn btn-custom">Adotar</a>
            </div>
          </div>
        </div>
      </div>


</body>
@endsection