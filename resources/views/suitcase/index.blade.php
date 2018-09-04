@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Koffer</div>
                <div class="card-body">
                    @if(count($items) > 0)
                    @foreach($items as $c)
                    <div style="margin-bottom: 20px;">

                            <a href="{{ action('ObjectController@view', $c->objectsId->id) }}">{{ $c->objectsId->name }}</a>
                            <p> Aantal: {{ $c->qty}} </p>
                            <p> {{ $c->objectsId->weight }} KG </p>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
