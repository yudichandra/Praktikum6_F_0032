@extends('dashboard')

@section('content')

<div class ="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Show Student</h2>
    </div>
    <div>
    <a class="btn btn-secondary" href="{{route('students.index')}}">Back</a>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Student ID:</strong>
        {{$students->id}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Student Name:</strong>
        <td>{{$students->nama_depan }}&nbsp;{{$students->nama_belakang }}</td>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Student email:</strong>
        {{$students->email}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Student Phone NUmber:</strong>
        {{$students->no_telp}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Student Birtplace:</strong>
        {{$students->tempat_lahir}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Student Birth:</strong>
        {{$students->tanggal_lahir}}
</div>
</div>

</div>
@endsection