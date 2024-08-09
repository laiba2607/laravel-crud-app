@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        
        <form action="{{ route('student.update' , $item->id )}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">Student Name</label>
                <input type="text" class="form-control" name="stdname" value='{{$item->stdname}}' >
            </div>
            <div class="form-group">
            <label for="">Batch Code</label>
                <input type="text" class="form-control" name="batchid" value='{{$item->batchid}}'>
            </div>
            <div class="form-group">
            <label for="">Course</label>
            <select id="" class="form-control" name="coursename" value='{{$item->course}}'>
                <option value="CPISM">CPISM</option>
                <option value="DISM">DISM</option>
                <option value="HDSE I">HDSE I</option>
                <option value="HDSE II">HDSE II</option>
            </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-success">
            </div>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>

@endsection