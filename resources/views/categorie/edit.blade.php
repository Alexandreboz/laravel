<form action="{{route('categorie.update',$categorie)}}" method="POST">
    @method('PUT') @csrf
    <label>Titre de la catégorie</label>
    <input type="text" name="libelle" id="libelle" value="{{$categorie->libelle}}">
    @error('titre')
    <div class="text-red-500">
        {{$message}}
        @enderror
    </div>
    <button type="submit">Sauvegarder</button>
    <button type="submit">Annuler</button>
</form>