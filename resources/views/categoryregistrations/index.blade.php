@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end mb-2">
<a href="{{ route('categoryregistration.create')}}" class="btn btn-success float-right"> Add land title</a>
</div>



<div class="card card-default">
    <div class= "card-hearder">Categories</div>
<!-- display DB data -->
<div class="card-body">
    <table class="table">
        <thead>
            <th>Names</th>
        </thead>

        <tbody>
        @foreach($categoryregistrations as $categoryregistration)
        <tr>
        <td>
        {{$categoryregistration->name}}
        </td>
        <tr>
        @endforeach
        </tbody>
        </table>
        </div>
</div>

@endsection
