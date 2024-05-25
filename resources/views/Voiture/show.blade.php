<x-master>
    <div class="container mt-5">
        <h2>Détails de voiture</h2>
        <p><strong>Marque :</strong> {{$voiture->marque}}</p>
        <p><strong>Couleur :</strong> {{$voiture->color}}</p>

        @if($voiture->moteur)
        <h2>Détails du Moteur Associé</h2>
        <p><strong>Modèle :</strong> {{$voiture->moteur->model}}</p>
        <p><strong>Puissance :</strong> {{$voiture->moteur->puissance}}</p>
        @else
        <p>Cet auteur n'a pas de moteur associé.</p>
        @endif
    </div> 
</x-master>
