<x-master>
    <div class="container mt-5">
        <h2>Modifier stagiaire</h2>
        <form action="{{ route('stagiaires.update', $stagiaire->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom" value="{{ $stagiaire->nom }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Filière :</label>
                <input type="text" class="form-control" name="filiere" value="{{ $stagiaire->filiere }}">
            </div>

            <button type="submit" class="btn btn-primary">Modifier stagiaire</button>
        </form>
    </div> 
</x-master>
