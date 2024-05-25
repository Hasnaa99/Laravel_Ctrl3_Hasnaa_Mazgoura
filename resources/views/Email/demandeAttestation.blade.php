<x-master>
    <div class="container w-50 mx-auto mt-5">
        <h1 class="text-center">Ajouter événement</h1>
            <form action="{{ route('attestation') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer Attestation</button>
            </form>
    </div>
   
</x-master>
