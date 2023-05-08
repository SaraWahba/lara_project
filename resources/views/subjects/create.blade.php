@extends('shard.header')

@section('create_department')
        <h1 class="de">Add A Subject</h1>
     <div class="department">
        <form action="/subjects" method="POST" >
            @csrf
                   <label for="">Name_Subject :</label><br>
                   <input type="text" name="name" value="{{old('name')}}"><br>
                   @error('name')
                       <div class="text text-danger">
                        {{$message}}
                       </div>
                   @enderror
                   
                   <label for="">Code_Department :</label><br>
                   <input type="text" name="code" value="{{old('code')}}" ><br>
                   @error('code')
                   <div class="text text-danger">
                    {{$message}}
                   </div>
               @enderror
               <div>
                <label>Department :</label><br>
                <select   name="department_id" >
                    @foreach ($departments as $department)
                    <option value="{{$department->id}}">
                    {{$department->name}}
                    </option>
                    @endforeach
                </select>
                {{-- <input type="text" name="department_id" value="{{old('department_id')}}" ><br> --}}
            </div>
            <br>
                   <button class="btn btn-success">Send Data</button>
        </form>
     </div>
@endsection
