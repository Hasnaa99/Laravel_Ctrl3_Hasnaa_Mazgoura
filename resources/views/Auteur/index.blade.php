<x-master>
    <div>
        @if (session()->has('success'))
            <div class="alert alert-success m-5">
                {{session('success')}}
            </div>
        @endif
        <a class="btn btn-success m-2" href={{ route('auteurs.create') }}>Ajouter un nouveau auteur</a>
        <a class="btn btn-warning m-2" href={{ route('createEvent') }}>Ajouter un événement</a>
        <h1 class="m-4">Liste des auteures </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom </th>
                        <th>date de naissance</th>
                        <th>email</th>
                        <th>Action </th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($auteurs as $auteur)
                    <tr>
                        <td>{{$auteur->id}}</td>
                        <td>{{$auteur->nom}}</td>
                        <td>{{$auteur->dateNaissance}}</td>
                        <td>{{$auteur->email}}</td>
                        
                        <td>
                            <a class="btn btn-primary" href = {{route('auteurs.show',$auteur->id)}}>Afficher plus</a>
                            <form method="POST" action="{{route('auteurs.destroy',$auteur->id)}}" style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                            <a class="btn btn-info" href="{{route('auteurs.edit',$auteur->id)}}">Modifier</a>
                        </td>
                
                    </tr>
                    @endforeach
    
        
                </tbody>
               
            </table>
    
    </div>
</x-master>

