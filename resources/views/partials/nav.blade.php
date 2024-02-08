<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav_item nav-link active" href="{{ route('libros.nuevo') }}">Nuevo Libro</a>
      <a class="nav-item nav-link active" href="{{ route('libros.index') }}">Libros</a>
      <a class="nav-item nav-link active" href="{{ route('autores.index') }}">Autores</a>
      <a class="nav-item nav-link active" href="{{ route('libros.paginaFiltro') }}">Filtro Libros</a>

    </div>
  </div>
</nav>