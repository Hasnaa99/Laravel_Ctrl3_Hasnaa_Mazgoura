
<x-master>
    <div>
        @if(session()->has('success'))
            <div class="alert alert-success m-3">
                {{session('success')}}
            </div>
        @endif
        <a class="btn btn-success m-2" href="{{ route('stagiaires.create') }}">Ajouter un nouveau stagiaire</a>

        <h1 class="m-4">Liste des stagiaires</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Filière</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stagiaires as $stagiaire)
                <tr>
                    <td>{{ $stagiaire->id }}</td>
                    <td>{{ $stagiaire->nom }}</td>
                    <td>{{ $stagiaire->filiere }}</td>
                    <td>
                        <a class="btn btn-primary" href = {{route('stagiaires.show',$stagiaire->id)}}>Afficher plus</a>
                        <form method="POST" action="{{route('stagiaires.destroy',$stagiaire->id)}}" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                        <a class="btn btn-info" href="{{route('stagiaires.edit',$stagiaire->id)}}">Modifier</a>
                        
                    </td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$stagiaires->links()}}
</x-master>
