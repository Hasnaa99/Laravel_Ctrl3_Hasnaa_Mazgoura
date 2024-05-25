<x-master>
   <div class="container mt-5">
            <h2>Modifier auteur</h2>
            <form action="{{route('auteurs.update',$auteur->id)}}" method="POST">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nom :</label>
                    <input type="text" class="form-control" name="nom" value="{{$auteur->nom}}">
                </div>
         
        
                <div class="mb-3">
                    <label  class="form-label">Date de naissance :</label>
                    <input type="text" class="form-control" name="dateNaissance" value="{{$auteur->dateNaissance}}" >
                </div>
                <div class="mb-3">
                    <label  class="form-label">Email :</label>
                    <input type="text" class="form-control" name="email" value="{{$auteur->email}}" >
                </div>
               
                <button type="submit" class="btn btn-primary">Modifier auteur</button>
            </form>
    </div >  
</x-master>
        
