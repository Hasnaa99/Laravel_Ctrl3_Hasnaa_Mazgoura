<x-master>
    <div class="container mt-5">
        <h2>Modifier voiture</h2>
        <form action="{{route('voitures.update',$voiture->id)}}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label class="form-label">Marque :</label>
                <input type="text" class="form-control" name="marque" value="{{$voiture->marque}}">
            </div>
         
            <div class="mb-3">
                <label class="form-label">Couleur :</label>
                <input type="text" class="form-control" name="color" value="{{$voiture->color}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Image :</label>
                <input type="file" class="form-control" name="image" value="{{$voiture->image}}">
            </div>
           
            <button type="submit" class="btn btn-primary">Modifier voiture</button>
        </form>
    </div >  
</x-master>
