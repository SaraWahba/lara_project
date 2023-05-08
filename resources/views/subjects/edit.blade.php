@extends('shard.header')

@section('edit_department')
<h1 class="de">Edit_Subject</h1>
<div class="department">
    <form action="{{ route('subjects.update' , $subject->id) }}" method="POST" >
    @csrf
    @method('PUT')
              <label for="">Name_Subject :</label><br>
              <input type="text" name="name" value="{{$subject->name}}"><br>
              <label for="">Code_Subject :</label><br>
              <input type="text" name="code" value="{{$subject->code}}"><br>
              <div>
                <label>Department :</label><br>
                <select name="department_id" >
                    @foreach ($departments as $department)
                    <option value="{{$department->id}}">
                    {{$department->name}}
                    </option>
                    @endforeach
                </select>
            </div>
            <br>
              {{-- <label for="">Department :</label><br>
              <input type="text" name="department_id" value="{{$subject->department_id}}" ><br><br> --}}
              <button class="btn btn-primary">Edit Data</button>
   </form>
</div>
@endsection