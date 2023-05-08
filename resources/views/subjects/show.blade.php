@extends('shard.header')
@section('show_department')
<h1 class="de">Show_SubjectData</h1>
<div class="data-table">
    <div class="student-data">
        <table>
            <thead class="head">
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Code</th>
                  <th>Department_ID</th>
              </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->code }}</td>
                    <td>{{ $subject->department_id }}:-<br>{{$subject->department->name}}</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
    @endsection

