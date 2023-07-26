<div class="container">
    <h2>Eliminar Registro</h2>
    <p>Estás a punto de eliminar el siguiente registro:</p>
    <p><strong>Nombre:</strong> {{ $ejemplo->nombre }}</p>
    <p><strong>Email:</strong> {{ $ejemplo->email }}</p>

    <form action="{{ route('ejemplo.destroy', $ejemplo->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    <a href="{{ route('ejemplo.index') }}" class="btn btn-secondary">Cancelar</a>
</div>