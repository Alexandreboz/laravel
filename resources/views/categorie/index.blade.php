<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>{{__('List of all games')}}</h1>
                    
                    <table>
                        <thead>
                            <th>Id</th>
                            <th>Libelle</th>
                            <th>action</th>
                            <th><a href="{{route('categorie.create')}}"><x-creer-btn></x-creer-btn></a></th> 
                        </thead>
                     @foreach($categorie as $categories)
                     <tr>
                        <td>{{$categories->id}}</td> 
                        <td>{{$categories->libelle}}</td>
                        <td>
                            <a href="{{route('categorie.show', $categories->id)}}"><x-voir-btn></x-voir-btn></a>
                            <a href="{{route('categorie.edit', $categories->id)}}"><x-modifier></x-modifier></a>
                            <a href="#"><x-supprimer></x-supprimer></a>
                        </td>
                     </tr>
                     @endforeach
                     </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
   