<form action="{{route('jeux.update',$jeux)}}" method="POST">
    @method('PUT') @csrf
    <label>Titre du jeu</label>
    <input type="text" name="titre" id="titre" value="{{$jeux->titre}}">
    @error('titre')
    <div class="text-red-500">
        {{$message}}
        @enderror
    </div>
    <button type="submit">Sauvegarder</button>
    <button type="submit">Annuler</button>
</form>