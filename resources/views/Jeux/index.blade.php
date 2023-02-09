<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jeux') }}
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
                            <th>Titre</th>
                            <th>action</th>
                            <th><a href="{{route('jeux.create')}}"><x-creer-btn></x-creer-btn></a></th> 
                        </thead>
                     @foreach($jeux as $jeu)
                     <tr>
                        <td>{{$jeu->id}}</td> 
                        <td>{{$jeu->titre}}</td>
                        <td>
                            <a href="{{route('jeux.show', $jeu->id)}}"><x-voir-btn></x-voir-btn></a>
                            <a href="{{route('jeux.edit', $jeu->id)}}"><x-modifier></x-modifier></a>
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
   