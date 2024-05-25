<x-master>
       <div class="container mt-5">
        <h2>Ajouter un nouveau auteur</h2>
        <form action="{{route('auteurs.store')}}" method="POST" >
            @csrf
            <div class="mb-3">
                <label  class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom">
            </div>
         
            
            <div class="mb-3">
                <label  class="form-label">Date de naissance :</label>
                <input type="date" class="form-control"  name="dateNaissance">
            </div>
            <div class="mb-3">
                <label  class="form-label">Email:</label>
                <input type="email" class="form-control"  name="email">
            </div>
   
            <button type="submit" class="btn btn-primary">Ajouter auteur</button>
        </form>
    </div> 
</x-master>

