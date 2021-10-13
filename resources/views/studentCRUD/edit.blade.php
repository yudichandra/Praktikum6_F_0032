@extends('dashboard')

@section('content')

<div class ="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Edit Students</h2>
    </div>
    <div>
    <a class="btn btn-secondary" href="{{route('students.index')}}"> Back</a>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>There were some problem with your input<br><br>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
</div>
@endif

<form action="{{route('students.update',$students->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student first Name:</strong>
                <input type="text" name="nama_depan" class="form-control" placeholder="Faculty Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student last Name:</strong>
                <input type="text" name="nama_belakang" class="form-control" placeholder="Faculty Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Faculty Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Phone:</strong>
                <input type="text" name="no_telp" class="form-control" placeholder="Faculty Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Birthplace:</strong>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Faculty Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Birthdate:</strong>
                <input type="text" name="tanggal_lahir" class="form-control" placeholder="Faculty Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 mt-5 tect-center">
    <button type="submit" class="btn btn-primary">Update</button>
</div>
</div>

</form>
@endsection
