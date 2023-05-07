@extends('shard.header')

@section('create_department')
        <h1 class="de">Create_Department</h1>
     <div class="department">
        <form action="/department" method="POST">
         @csrf
                   <label for="">Name_Department :</label><br>
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
               <br>
                   <button class="btn btn-primary">Send Data</button>
        </form>
     </div>
@endsection
