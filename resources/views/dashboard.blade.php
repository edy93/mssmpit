@extends('layouts.back')

@section('content')
   <div class="card">
       <div class="card-header">
           your dashboard
       </div>
       <div class="card-body">
           Hi {{ auth()->user()->name }}
       </div>
   </div>
@endsection