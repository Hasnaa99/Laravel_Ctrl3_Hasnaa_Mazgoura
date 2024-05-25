<x-master>
    <h3 class="m-3">Informations du stagiaire {{ $stagiaire->id }}</h3>
    <p class="m-4"><b>Nom :</b> {{ $stagiaire->nom }} </p>
    <p class="m-4"><b>Filière :</b> {{ $stagiaire->filiere }}</p>
    <p class="m-4"><b>Les Formateurs de ce stagiaire :</b></p>
    <div class="d-flex m-2">
        @foreach ($stagiaire->formateurs as $formateur)
        <div class="card m-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Nom formateur : {{ $formateur->nom }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Age : {{ $formateur->age }}</h6>
                <p class="card-text">Profession : {{ $formateur->profession }}</p>
                <div class="d-flex">
                    <form method="POST" action="{{ route('formateurs.destroy', $formateur->id) }}" class="mx-2">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer ce formateur ?')">Supprimer</button>
                    </form>
                    <a class="btn btn-primary" href="{{ route('formateurs.edit', $formateur->id) }}">Modifier</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-master>
