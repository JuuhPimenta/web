@extends('layout')

@extends ('content')

<form class="form-singin" action="{{route('calcular')}}" method="POST">
    @crsf
    <div class="texto">
        <h1 class="h3 mb-3 font-weight-normal">Capital juros ao mes </h1>
    </div>

