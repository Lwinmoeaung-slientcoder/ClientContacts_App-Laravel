@extends('layouts.master')
@section('title','New Contacts')

@section('content')
    <div class="container">
      
        <div class="well">
            @if(session('status'))
                <p class="alert alert alert-dismissible alert-secondary">{{session('status')}}</p>
            @endif
          
            <form method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                    <fieldset>
                        <legend>Insert New Contacts</legend>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                    <label for="Username" class="form-label mt-4">User's Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$useracc->name}}"  autocomplete="name">
                                    {!! $errors->first('name', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{$useracc->email}}"  aria-describedby="emailHelp"  autocomplete="email">
                                    {!! $errors->first('email', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>


                                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                <label for="companyname" class="form-label mt-4">Password</label>
                                <input class="form-control" type="password" name="password"  autocomplete="new-password">
                                {!! $errors->first('password', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
                                <label for="companyname" class="form-label mt-4">Confirm Password</label>
                                <input class="form-control" id="password-confirm" type="password" name="password_confirmation" autocomplete="new-password">
                                {!! $errors->first('password_confirmation', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
                                <label for="roles">User's Role</label>
                                <select name="role" id="role">
                                <option value="{{$useracc->role}}" selected>  {{$useracc->role}}  </option>
                                @if($useracc->role=='Guest')
                                <option value="Staff">Staff</option>
                                <option value="Manager">Manager</option>
                                @elseif($useracc->role=='Staff')
                                <option value="Guest">Guest</option>
                                <option value="Manager">Manager</option>
                                @else
                                <option value="Guest">Guest</option>
                                <option value="Staff">Staff</option>
                                @endif

                                </select>
                               {!! $errors->first('role', '<p class="help-block"><font color="red">:message</font></p>') !!}
                    </div>
                            </div>  <!-- End Column one -->
                        </div>
                        <a href="/user/accounts" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                  </fieldset>
            </form>
        </div>
    </div>
   
</div><!--End Side Bar Column -->
</div>  <!--Container Main end-->

@endsection
