@extends('layouts.app')

@section('content')
        <a href="/appeals" class="btn btn-default"> Go Back</a>
        <H1> Case No: {{$appeal->caseno}}</H1>
        
        <div>
               <h3>Sentence Type: {{$appeal->sentencetype}} </h3>   
           <h3> Prison Name: {{$appeal->prisonname}} </h3>        </div>
        <hr>
        <small> Written on {{$appeal->created_at}}</small>
@endsection