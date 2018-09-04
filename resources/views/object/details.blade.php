@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Voorwerp details</div>
                <div class="card-body">
                  <h4>{{ $object->name }}</h4>
					</div>
					<ul>
					gewicht: {{ $object->weight }}KG
                   </ul>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection