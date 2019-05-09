@extends('layouts.app')

@section('content')

@if(count($errors)>0)

<ul class="list-group">
     
     @foreach($errors->all() as $error)

         <li class="list-group-item text-danger">

         {{ $error}}
  
  </li>

  @endforeach

  </ul>

  @endif

<div class="card bg-primary"> 
 

            <div class="card">

            Create a new category

            </div>

<div class="card-body">

         <form action="{{route('category.store')}}" method="post" >

         {{ csrf_field()}}

         <div class ="form-group">

         <label for="name">Name</label>

         <input type="text" name="name" class="form-control">
         </div>

         
<div class="form-group">

          <button class="btn btn-sucess"type="submit">

          Store category

          </button>



</div>

</form>
</div>


</div>


         @stop
