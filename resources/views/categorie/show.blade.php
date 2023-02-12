<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ma Catégorie') }}
        </h2>
    </x-slot>
    <div class="p-6 text-gray-900">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<h1>{{$id}}</h1>
<h2>{{__('Détail Catégorie')}}</h2>
<div class="overflow-hidden
shadow-sm
rounded-lg
bg-indigo-500
hover:bg-cyan-600/50">
    <div class="p-5
text-black
text-center
md:text-left">
        Titre : {{$categorie->libelle}}
        <p>{{$jeux}}</p>
    </div>
</div>
<x-modifier></x-modifier>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>