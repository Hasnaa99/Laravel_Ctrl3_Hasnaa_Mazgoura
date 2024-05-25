<x-master>
    <div class="container mt-5">
        <h2>Ajouter une nouvelle voiture</h2>
        <form action="{{route('voitures.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Marque :</label>
                <input type="text" class="form-control" name="marque">
            </div>
         
            <div class="mb-3">
                <label class="form-label">Couleur :</label>
                <input type="text" class="form-control" name="color">
            </div>
            <div class="mb-3">
                <label class="form-label">Image :</label>
                <input type="file" class="form-control" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter voiture</button>
        </form>
    </div> 
</x-master>
