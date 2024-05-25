<x-master>
    <div>
        @if(session()->has('success'))
            <div class="alert alert-success m-3">
                {{session('success')}}
            </div>
        @endif
        <a class="btn btn-success m-2" href={{ route('voitures.create') }}>Ajouter une nouvelle voiture</a>
        <a class="btn btn-secondary mx-3" href="{{ route('demandeAttestaion') }}">Demander une attestaion de travail</a>
        <h1 class="m-4">Liste des voitures</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Marque</th>
                    <th>Couleur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($voitures as $voiture)
                <tr>
                    <td>{{$voiture->id}}</td>
                    <td><img src="{{asset('storage/images/'.$voiture->image)}}" width="10%"/>{{$voiture->marque}}</td>
                    <td>{{$voiture->color}}</td>
                    <td>
                        <a class="btn btn-primary" href = {{route('voitures.show',$voiture->id)}}>Afficher plus</a>
                        <form method="POST" action="{{route('voitures.destroy',$voiture->id)}}" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                        <a class="btn btn-info" href="{{route('voitures.edit',$voiture->id)}}">Modifier</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-master>
