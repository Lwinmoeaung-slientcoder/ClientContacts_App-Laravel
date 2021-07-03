@extends('layouts.master')
@section('title','New Contacts')

@section('content')
    <div class="container">
      
        <div class="well">
            @if(session('status'))
                <p class="alert alert alert-success">{{session('status')}}</p>
            @endif
          
            <form method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                    <fieldset>
                        <legend>Create New Projects</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('project_name') ? 'has-error' : ''}}">
                                    <label for="Username" class="form-label mt-4">Project Name</label>
                                    <input type="text" class="form-control" name="project_name" id="project_name"  placeholder="project_name">
                                    {!! $errors->first('project_name', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('project_member') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1" class="form-label mt-4">Project Member</label>
                                    <input type="text" class="form-control" name="project_member" id="project_member" aria-describedby="project_member"  placeholder="project_member">
                                    {!! $errors->first('project_member', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>


                                <div class="form-group {{ $errors->has('company') ? 'has-error' : ''}}">
                                <label for="companyname" class="form-label mt-4">Job Name(eg . company or own business )</label>
                                <input class="form-control" type="text" name="company" id="company"  placeholder="company's name">
                                {!! $errors->first('company', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
                                <label for="text" class="form-label mt-4">Project State</label><br>
                                    <select  name="state">
                                    <option value="" selected>  </option>
                                  
                                    <option value="ongoing">Ongoing</option>
                                    <option value="late">Late</option>
                                    <option value="finish">Finished</option>
                                 
                                </select>
                                {!! $errors->first('state', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>
                            </div>  <!-- End Column one -->

                            <div class="col-md-6">
                               

                                <div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
                                    <label for="text" class="form-label mt-4">Amount</label>
                                    <input type="text" class="form-control" name="amount" id="amount"  placeholder="Amount">
                                    {!! $errors->first('amount', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('startdate') ? 'has-error' : ''}}">
                                    <label for="text" class="form-label mt-4">Start Date</label>
                                    <input type="date" class="form-control" name="startdate" id="startdate">
                                    {!! $errors->first('startdate', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('enddate') ? 'has-error' : ''}}">
                                    <label for="text" class="form-label mt-4">End Date</label>
                                    <input type="date" class="form-control" name="enddate" id="startdate">
                                    {!! $errors->first('enddate', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>

                                <div class="form-group {{ $errors->has('contactname') ? 'has-error' : ''}}">
                                <label for="text" class="form-label mt-4">Parterner Name</label><br>
                                    <select  name="contactname">
                                    <option value="" selected>  </option>
                                    @foreach($contacts as $contact)
                                    <option value="{{$contact->name}}">{{$contact->name}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('contactname', '<p class="help-block"><font color="red">:message</font></p>') !!}
                                </div>
                            </div>  <!-- End Column two -->
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                  </fieldset>
            </form>
        </div>
    </div>
   
</div><!--End Side Bar Column -->
</div>  <!--Container Main end-->

@endsection
