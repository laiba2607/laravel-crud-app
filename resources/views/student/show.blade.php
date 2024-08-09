@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th scope="col">Student Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Batch Code</th>
      <th scope="col">Course</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->stdname}}</td>
      <td>{{$item->batchid}}</td>
      <td>{{$item->coursename}}</td>
      <td><a href="/student" class="btn btn-info">Back</a></td>
    </tr>


</tbody>
</table> 


@endsection