
@extends('layouts.app')

@section('content')
<a href="/student/create" class="btn btn-primary mt-1">Create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Student Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Batch Code</th>
      <th scope="col">Course</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->stdname}}</td>
      <td>{{$item->batchid}}</td>
      <td>{{$item->coursename}}</td>
      <td><div class="btn-group">
        <a href="{{ route('student.show',$item->id)}}" class="btn btn-success btn-sm">Show</a><a href="{{ route('student.edit',$item->id)}}" class="btn btn-info btn-sm">Edit</a>
       
       <form action="{{ route('student.destroy',$item->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
       </form>
       
    </div></td>
    </tr>
    @endforeach
</tbody>
</table>

@endsection
