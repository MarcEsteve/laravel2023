<form action="{{ route('ejemplo.update', $ejemplo->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="nombre" value="{<!-- -->{ $ejemplo->nombre }}">
    <input type="email" name="email" value="{<!-- -->{ $ejemplo->email }}">
    <button type="submit">Actualizar</button>
</form>