@extends('shard.header')

@section('edit_department')
<h1 class="de">Edit_Department</h1>
<div class="department">
   <form action="{{route('department.update',$departments->id)}}" method="POST">
    @csrf
    @method('PUT')
              <label for="">Name_Department :</label><br>
              <input type="text" name="name" value="{{$departments->name}}"><br><br>
              <label for="">Code_Department :</label><br>
              <input type="text" name="code" value="{{$departments->code}}"><br><br>
              <button class="btn btn-primary">Edit Data</button>
   </form>
</div>
@endsection