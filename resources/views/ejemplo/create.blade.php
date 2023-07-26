<form action="{{ route('ejemplo.store') }}" method="post">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Guardar</button>
</form>