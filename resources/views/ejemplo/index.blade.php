@foreach($ejemplos as $ejemplo)
 <p>{{ $ejemplo->nombre }} - {{ $ejemplo->email }}</p>
@endforeach