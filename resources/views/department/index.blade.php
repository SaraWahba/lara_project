@extends('shard.header')

@section('show_department')

@if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}  
    </div>
@endif

     <h1 class="de">Show_Department</h1>
<div class="data-table">
    <div class="student-data">
        <table>
            <thead class="head">
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Code</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->code }}</td>
                    <td>
                        <div class="action">
                        <a href="{{route('department.edit',$department->id)}}"><i class="fa-solid fa-pen-to-square update"></i></a>
                        <form  action="{{route('department.destroy', $department->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn-link">
                                <i class="fa-solid fa-trash delete"></i>
                                </button>
                          </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection