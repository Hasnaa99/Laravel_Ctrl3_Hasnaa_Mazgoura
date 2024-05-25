<x-master>
    <div class="container mt-5">
        <h2>Ajouter une nouvelle stagiaire</h2>
        <form action="{{ route('stagiaires.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Filière :</label>
                <input type="text" class="form-control" name="filiere">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter stagiaire</button>
        </form>
    </div> 
</x-master>
