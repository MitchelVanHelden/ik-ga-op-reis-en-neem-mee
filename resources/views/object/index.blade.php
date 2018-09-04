@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Voorwerpen</div>
                <div class="card-body">
                    <ul>
                       @foreach($object as $object) 
                       <li><a href="{{ action('ObjectController@view', $object->id) }}">{{ $object -> name }}</a></li>
                       @endforeach
                   </ul>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection