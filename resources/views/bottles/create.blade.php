@extends('layouts.app')
@section('content')
<div class="p-10">


<form method="post" action="{{route('store')}}">
    @csrf
    
    <div class="mb-6">
        <label for="cuveename" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom de la Cuvée</label>
        <input type="text" id="cuvee_name" 
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
        <label for="appelation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">appélation</label>
        <input type="text" id="appelation" value=""
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-6">
        <label for="vintage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">millésime</label>
        <input type="number" id="vintage" min="1900" max="2100" value=""
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div class="mb-6">
        <label for="capacity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">capacité</label>
        <input type="text" id="capacity" value=""
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div class="mb-6">
        <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">couleur</label>
        <input type="text" id="color" value=""
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div class="mb-6">
        <label for="consumable" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">date consomable</label>
        <input type="date" id="consumable" value=""
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div class="mb-6">
        <label for="peak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">date apogée</label>
        <input type="date" id="peak" value=""
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div class="mb-6">
        <label for="danger" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">date danger</label>
        <input type="date" id="danger" value=""
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
   
    
    <div class="mb-6">
        <textarea name="descritpion" id="origins" cols="30" rows="5" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="description"></textarea>
    </div>
    <div class="mb-6">
        <label for="grape_variety" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">cépage</label>

        <select name="grape_variety" class="bg-gray-50 border-gray-300" id="" >
            <option value="1">pinot noir</option>
            <option value="2">riesling blanc</option>
            <option value="3">Sauvignon blanc</option>
            <option value="4">Syrah noir</option>
            <option value="5">Visognier blanc</option>
        </select>
    </div>

    <div class="mb-6">
        <label for="cultures" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">culture</label>

        <select name="cultures" class="bg-gray-50 border-gray-300" id="" >
            <option value="1">traditionnel</option>
            <option value="2">raisonné</option>
            <option value="3">bio</option>
            <option value="4">biodynamique</option>
        </select>
    </div>
    <div class="mb-6">
        <label for="unit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">unité</label>
        <input type="number" id="unit" min="0" max="99" value=""
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <button type="submit"
         class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Ajouter</button>
</form>
</div>
@endsection