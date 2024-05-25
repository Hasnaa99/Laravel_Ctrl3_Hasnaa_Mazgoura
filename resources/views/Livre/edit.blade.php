<x-master>
    <div class="container mt-5">
            <h2>Modifier livre</h2>
            <form action="{{route('livres.update',$livre->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Titre :</label>
                    <input type="text" class="form-control" name="titre" value="{{$livre->titre}}">
                </div>
         
        
                <div class="mb-3">
                    <label for="prenom" class="form-label">Date de publication :</label>
                    <input type="text" class="form-control" value="{{$livre->datePublication}}" name="datePublication">
                </div>
        
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prix :</label>
                    <input type="text" class="form-control" value="{{$livre->prix}}" name="prix" >
                </div>
               
                <button type="submit" class="btn btn-primary">Modifier livre</button>
            </form>
        </div > 
</x-master>
        
