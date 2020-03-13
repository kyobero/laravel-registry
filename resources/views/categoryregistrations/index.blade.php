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
            <th></th>
        </thead>

        <tbody>
        @foreach($categoryregistrations as $categoryregistration)
        <tr>
        <td>
        {{$categoryregistration->name}}
        </td>
        <td>
        <a href="{{ route('categoryregistration.edit', $categoryregistration->id)}}" class='btn btn-info btn-sm'>
        Edit 
        </a>
        <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $categoryregistration->id }})">Delete</button>
        </td>
        <tr>
        @endforeach
        </tbody>
        </table>

  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <Form action="" method="POST" id="deleteCategoryRegistrationForm">
        @csrf
        @method('DELETE')
        <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete the land title?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
      </div>
    </div>

        </Form>
  </div>
</div>
        </div>
</div>

@endsection

@section('scripts')

<script>

function handleDelete(id) {
    var form = document.getElementById('deleteCategoryRegistrationForm')
    form.action = '/categoryregistration/' + id
    $('#deleteModal').modal('show')
}



</script>
@endsection