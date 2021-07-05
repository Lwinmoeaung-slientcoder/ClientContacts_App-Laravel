@extends('layouts.master')
@section('title','search')

@section('content')

    <div class="container-fluid">
            @if(session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
            @endif
            <table class="table">
                <thead>
                    <tr class="table-secondary">
                    <th scope="col">User ID</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    @if(Auth::User()->role=='Manager' || Auth::User()->role=='Staff')
                    <th scope="col">Actions</th>
                    @endif
                    </tr>
                </thead>
                <tbody>
                <?php $i=0; ?>
                @foreach($users as $user)
                    <tr>
                    <?php $i++ ?>
                    <th scope="row">{{$i}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->role}}</td>
                    @if(Auth::User()->role=='Staff')
                    <td colspan="2">
                    <a href="{{ action ('HomeController@usereditview',$user->id)}}" type="button" class="btn btn-primary">Edit</a></td>
                    @elseif(Auth::User()->role=='Manager' || Auth::User()->role=='Staff')
                    <td colspan="2">
                    <a href="{{ action ('HomeController@usereditview',$user->id)}}" type="button" class="btn btn-primary">Edit</a>
                   <!-- <a href="{{ action ('HomeController@userdelete',$user->id)}}" class="btn btn-primary">Delete</a></td> -->
                   <button type="button" class="btn btn-danger" data-id="{{$user->id}}" onclick="confirmDelete(this);">Delete</button>
                    @endif
                    </tr>
                 @endforeach
                </tbody>
            </table>
     </div><!-- End Container-->
 </div><!--End Side Bar Column -->
</div>  <!--Container Main end-->


<div id="myModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
             
            <div class="modal-header">
                <h4 class="modal-title">Delete User</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
 
            <div class="modal-body">
                <p>Are you sure you want to delete this user ?</p>
                <form method="get" action="/user/delete/" id="form-delete-user">
                    <input type="hidden" name="id">
                </form>
            </div>
 
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" form="form-delete-user"   class="btn btn-danger">Delete</button>
            </div>
 
        </div>
    </div>
</div>

@endsection

<script>
function confirmDelete(self) {
    var id = self.getAttribute("data-id");
 
    document.getElementById("form-delete-user").id.value = id;
    $("#myModal").modal("show");
}
</script>