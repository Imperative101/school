@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">PAVADINIMAS</div>

               <div class="card-body">
                   <table class="table">
                       <tr>
                           <th>Klase</th>
                           <th>Raide</th>
                           <th>edit</th>
                           <th>Delete</th>
                       </tr>


               @foreach ($schoolClassess as $schoolClass)
               <tr>
               <td>{!!$schoolClass->grade!!}</td>
               <td>{!!$schoolClass->letter!!}</td>
               <td><a class="btn btn-primary href="{{route('schoolClass.edit',[$schoolClass])}}">edit</a></td>
                <td>
                <form method="POST" action="{{route('schoolClass.destroy', [$schoolClass])}}">

               </tr>
             
              @csrf
              <button type="submit">DELETE</button>
              </form>
              <br>
                @endforeach
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
