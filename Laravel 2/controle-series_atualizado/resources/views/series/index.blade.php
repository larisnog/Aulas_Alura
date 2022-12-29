<x-layout title="{{ __('messages.app_name') }}" :mensagem-sucesso="$mensagemSucesso"> <!-- componente -->
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
           <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    @if(isset($serie->cover))
                    <img src="{{ asset('storage/' . $serie->cover) }}" width="150px" alt="" class="me-3 img-thumbnail">
                    @endif
                    <a href="{{ route('seasons.index', $serie->id) }}">
                        {{ $serie->nome }}
                    </a>
                </div>
                
                <span class="d-flex">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
                        E
                    </a>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            X
                        </button>
                    </form>
                </span>
           </li>
        @endforeach
    </ul>
</x-layout>

