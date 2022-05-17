@extends('layouts.app')
@section('content')
    <div class="p-10">
        <!--Card 1-->
        <div class=" w-full lg:max-w-full lg:flex">
        </div>
        <div
            class="border-r border-b border-l border-red-400  lg:border-l-0 lg:border-t lg:border-red-400 bg-gray-200 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <p class="text-sm text-gray-600 flex items-center">
                    <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                    </svg>
                    couleur
                </p>
                <div class="flex flex-items-row">
                    <div class="text-gray-900 font-bold text-xl mb-2">Nom de la Cuvée
                        <p class="text-gray-700 font-light text-base">(notation) <br>(commentaire récent) Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit. Libero aliquid provident <br> delectus recusandae voluptas dolore
                            cupiditate tenetur ut, <br> ea saepe laborum necessitatibus voluptate rerum laudantium, quam, dolorum
                            earum neque aut?. </p>
                    </div>
                </div>

            </div>
            <div class="flex items-center">
                <div class="text-sm pr-12">
                    <ul>
                        <li>Date consomable</li>
                        <li>Date apogée</li>
                        <li>Date danger</li>
                    </ul>
                </div>
                <div class="text-sm pl-4" >
                    <p class="text-gray-900 font-semibold leading-none">unité</p>
                    <p class="text-gray-600">x</p>
                </div>
                <div class="pl-4">
                <ul>
                    <li><a href=#> plus</a></li>
                    <li><a href=#>modifier </a></li>
                    <li><a href=#> supprimer</a></li>
                </ul>
                </div>   
            </div>

        </div>

    </div>
    </div>
@endsection
