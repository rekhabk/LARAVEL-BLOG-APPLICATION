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

            Create a new Post

            </div>

<div class="card-body">

         <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">

         {{ csrf_field()}}

         <div class ="form-group">

         <label for="title">Title</label>

         <input type="text" name="title" class="form-control">
         </div>

         <div class ="form-group">

         <label for="featured">featured-image</label>

         <input type="file" name="featured" calss="form-control">
         </div>



         <div class ="form-group">

<label for="content">Content</label>

<input type="content" name="content" cols="5" rows="5" class="form-control"></textarea>
</div>

<div class="form-group">

<div class="text-center">

<button class="btn sucess" type="submit">Store Post</button>

</div>
</div>


</div>


@stop
