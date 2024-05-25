<x-master>
    <div class="container mt-5">
        <h2>Modifier formateur</h2>
        <form action="{{ route('formateurs.update', $formateur->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom" value="{{ $formateur->nom }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Âge :</label>
                <input type="number" class="form-control" name="age" value="{{ $formateur->age }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Profession :</label>
                <input type="text" class="form-control" name="profession" value="{{ $formateur->profession }}">
            </div>

            <button type="submit" class="btn btn-primary">Modifier formateur</button>
        </form>
    </div> 
</x-master>

