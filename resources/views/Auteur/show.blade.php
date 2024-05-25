<x-master>
    <h3 class="m-3">Les informations de l'auteur {{ $auteur->id }}</h3>
    <p class="m-4"><b>Nom :</b> {{ $auteur->nom }}</p>
    <p class="m-4"><b>Date de naissance :</b> {{ $auteur->dateNaissance }}</p>

    @if ($auteur->livres->isNotEmpty())
        <p class="m-4"><b>Les livres qu'il a écrits :</b></p>
        <div class="d-flex flex-wrap m-2">
            @foreach ($auteur->livres as $livre)
                <div class="card m-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Livre : {{ $livre->titre }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Date de publication : {{ $livre->datePublication }}</h6>
                        <p class="card-text">Prix : {{ $livre->prix }}</p>
                        <div class="d-flex">
                            <form method="POST" action="{{ route('livres.destroy', $livre->id) }}" class="mx-2">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger"
                                    onclick="return confirm('Voulez-vous vraiment supprimer ce livre ?')">Supprimer</button>
                            </form>
                            <a class="btn btn-primary" href="{{ route('livres.edit', $livre->id) }}">Modifier</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="m-4">Aucun livre trouvé.</p>
    @endif

</x-master>
