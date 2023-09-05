<p>
    Olá {{ $nome ?? 'visitante' }} {{ $sobrenome ?? '' }}.
</p>
<p><a href="{{ route('ola-mundo') }}">Ir para olá mundo</a></p>
<p>{{ route('ola-mundo') }}</p>
