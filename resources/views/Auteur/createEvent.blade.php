<x-master>
    <h1 class="text-center m-5">Ajouter événement</h1>
    <div class="container w-50">
        <form action="{{ route('sendNotifEvent') }}" method="POST" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom de l'événement</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Heure</label>
                <input type="time" class="form-control" id="time" name="time" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Emplacement</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer Notification</button>
        </form>

    </div>
    
</x-master>
