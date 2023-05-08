
@extends('shard.header')

@section('show_department')
@if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}  
    </div>
@endif
<h1 class="de">Show_Subject</h1>
<div class="data-table">
    <div class="student-data">
        <table>
            <thead class="head">
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td><a  class="su" href="{{ route('subjects.show' , $subject->id) }}"> {{$subject->name}}</a></td>
                    <td>
                        <div class="action">
                        <a href="{{route('subjects.edit',$subject->id)}}"><i class="fa-solid fa-pen-to-square update"></i></a>
                        <form  action="{{route('subjects.destroy', $subject->id)}}" method="POST">
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

<div class="style">
    {{$subjects->links()}}
</div>
@endsection