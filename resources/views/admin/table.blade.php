{{-- @if (session()->has('message'))
<div class="alert alert-success">

 {{(session()->get('message'))}}
 <button type="button"class="close" data-dismiss="alert" aria-hidden="true">x</button>

</div>
    
@endif  --}}

<table class="table table-striped">
    <thead class="table-light">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">

        @foreach ($task as $key=> $task)

     <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$task->name}}</td>
        <td>{{$task->email}}</td>
        <td>{{$task->subject}}</td>
        <td>{{$task->msg}}</td>
        <td><a href="{{route('blog.delete',$task->id)}}" class="btn btn-danger">Delete</a> </td>
      </tr>

      @endforeach

    </tbody>
  </table>