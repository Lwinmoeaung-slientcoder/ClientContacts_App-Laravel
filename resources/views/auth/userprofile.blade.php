@extends('layouts.master')
@section('title','search')

@section('content')

    <div class="container-fluid">
            @if(session('status'))
                <p class="alert alert-dismissible alert-secondary">{{session('status')}}</p>
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
                   <a href="{{ action ('HomeController@userdelete',$user->id)}}" class="btn btn-primary">Delete</a></td>
                    @endif
                    </tr>
                 @endforeach
                </tbody>
            </table>
     </div><!-- End Container-->
 </div><!--End Side Bar Column -->
</div>  <!--Container Main end-->
@endsection