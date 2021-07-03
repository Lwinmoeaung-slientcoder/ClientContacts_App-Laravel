@extends('layouts.master')
@section('title','Contact Profile')

@section('content')
    <div class="container">
      
        <div class="well">
            @if(session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
            @endif
          
            <form method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                    <fieldset>
                        <legend>Profile Detail</legend>
                      
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('project_name') ? 'has-error' : ''}}">
                                    <label for="Username" class="form-label mt-4">Contact's Name</label>
                                    <input type="text" class="form-control" name="project_name" id="project_name"  value='{{$profiledata->project_name}}'>
                                    {!! $errors->first('project_name', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('project_member') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1" class="form-label mt-4">Project Member</label>
                                    <input type="integer" class="form-control" name="project_member" value='{{$profiledata->project_member}}'  id="project_member" aria-describedby="project_member" placeholder="Enter email">
                                    {!! $errors->first('project_member', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>


                                <div class="form-group {{ $errors->has('company') ? 'has-error' : ''}}">
                                <label for="companyname" class="form-label mt-4">Job Name(eg . company or own business )</label>
                                <input class="form-control" type="text" name="company" id="companyname"  value='{{$profiledata->company}}' placeholder="company's name">
                                {!! $errors->first('company', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
                                <label for="text" class="form-label mt-4">Project State</label><br>
                                    <select  name="state">
                                    <option value='{{$profiledata->state}}' selected> {{$profiledata->state}} </option>
                                  
                                    <option value="ongoing">Ongoing</option>
                                    <option value="late">Late</option>
                                    <option value="finish">Finished</option>
                                 
                                </select>
                                {!! $errors->first('state', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>
                            </div>  <!-- End Column one -->

                            <div class="col-md-6">
                               

                                <div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
                                    <label for="text" class="form-label mt-4">Amout</label>
                                    <input type="text" class="form-control" name="amount" id="amount" value='{{$profiledata->amount}}'>
                                    {!! $errors->first('amount', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('startdate') ? 'has-error' : ''}}">
                                    <label for="date" class="form-label mt-4">Start Date</label>
                                    <input type="date" class="form-control" name="startdate" id="startdate" value='{{$profiledata->startdate}}'>
                                    {!! $errors->first('startdate', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('enddate') ? 'has-error' : ''}}">
                                    <label for="text" class="form-label mt-4">End Date</label>
                                    <input type="date" class="form-control" name="enddate" value='{{$profiledata->enddate}}'>
                                    {!! $errors->first('enddate', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('contactname') ? 'has-error' : ''}}">
                                <label for="text" class="form-label mt-4">Parterner Name</label><br>
                                    <select  name="contactname">
                                    <option value='{{$profiledata->contactname}}' selected>  {{$profiledata->contactname}} (selected)</option>
                                    @foreach($contacts as $contact)
                                    <option value="{{$contact->name}}">{{$contact->name}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('contactname', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>
                            </div>  <!-- End Column two -->
                        </div>
                        <a href="/projects" class="btn btn-primary">Back</a>
                        @if(Auth::User()->role=='Manager' || Auth::User()->role=='Staff')
                        <button type="submit" class="btn btn-primary">Update</button>
                        @endif
                        
                  </fieldset>
            </form>
        </div>
    </div>
   
</div><!--End Side Bar Column -->
</div>  <!--Container Main end-->

@endsection
