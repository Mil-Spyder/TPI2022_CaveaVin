@extends('layouts.app')
@section('content')
    <!--card-->
    <div class="w-full flex items-center justify-center pt-4">
        <div class="bg-gray-100 rounded-lg shadow-lg flex-col w-5/6 sm:max-w-2xl px-6 border border-red-300">
            <div class="px-5 py-3 mb-3 text-3xl font-medium text-gray-800 mt-6">
                <div class="">{{ $bottle->appelation }} <br>{{ $bottle->cuvee_name }}</div>
            </div>
            <hr class="border-1 border-gray-300">
            <div class="flex flex-col ml-4 py-4">
                <h2 for="presentation" class="text-gray-700 font-medium mb-2 underline">Présentation</h2>
                <div class="flex ">
                    <ul>
                        <li>{{ $bottle->grape_variety_id }}</li>
                        <li>{{ $bottle->grape_variety_id }} pourcentage</li>
                        <li>{{ $bottle->color }}</li>
                        <li>{{ $bottle->vintage }}</li>
                        <li>{{ $bottle->region }}</li>
                        <li>{{ $bottle->consumable__date }}</li>
                        <li>{{ $bottle->Peak_date }}</li>
                        <li>{{ $bottle->danger_date }}</li>
                        <li>{{ $bottle->culture_id }}</li>
                        <li>{{ $bottle->winemaker_id }} nom du domaine</li>
                        <li>{{ $bottle->winemaker_id }} nom du vigneron</li>
                        <li>{{ $bottle->winemaker_id }} prénom du vigneron</li>
                    </ul>


                </div>
            </div>
            <div class="flex mt-7 items-center text-center">
                <hr class="border-gray-300 border-1 w-full rounded-md">

                <hr class="border-gray-300 border-1 w-full rounded-md">
            </div>
            <div class="flex flex-col ml-4 py-4">
                <h2 for="presentation" class="text-gray-700 font-medium mb-2 underline">Déscription</h2>
                <div class="flex">
                    <p class="">
                        {{ $bottle->description }}
                    </p>
                </div>
            </div>
            <div
                class="flex flex-col sm:flex-row justify-center sm:justify-between space-y-4 sm:space-x-0 items-center my-6">
                <div class="inline-flex items-center text-indigo-700 font-medium cursor-pointer hover:text-indigo-500">

                </div>

                <div class="py-2 px-8"> <button type="button"
                        class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"><a
                            href="#">télécharger le pdf</a>
                    </button>
                </div>
            </div>
            <div class="flex mt-7 items-center text-center">
                <hr class="border-gray-300 border-1 w-full rounded-md">

                <hr class="border-gray-300 border-1 w-full rounded-md">
            </div>
            <div class="flex flex-col ml-4 py-4">
                <h2 for="presentation" class="text-gray-700 font-medium mb-2 underline">Votre avis</h2>
                <div class="flex flex-row">
                    <div class="max-w-lg shadow-md grid grid-cols-2 gap-4 ">
                        @csrf
                        <form action="#" class="w-full p-4" method="POST">
                            <div class="mb-2">
                                <label for="comment" class="text-lg text-gray-600">Commentaire</label>
                                <textarea class="w-full h-20 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1" name="comment"
                                    placeholder="laisser votre commentaire..."></textarea>
                            </div>
                            <button
                                class="px-3 py-2 text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl rounded"><a
                                    href="#">Comment</a> </button>
                        </form>
                        <div>
                            <div class=" px-2 py-2 ">
                                <label for="comment" class="text-lg text-gray-600">Note</label>


                                <div class="flex items-center ">
                                    <form action="#" method="POST">
                                        <input type="text">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
