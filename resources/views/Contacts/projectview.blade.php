@extends('layouts.master')
@section('title','Projects')

@section('content')

    <div class="container-fluid">
        <div class="row">
        @foreach($projects as $project)
                 <div class="col-md-3">
                    <div class="card">
                    <img class="card-img-top" src="{{asset('/Contactimage/folder.png')}}" style="width:265px;height:220px" alt="Image Not Found">
                            <div class="card-body">
                                <h5 class="card-title">{{$project->project_name}}</h5>
                                <p class="card-text">
                                ProjectName&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- &nbsp;{{$project->project_name}}<br>
                                State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- &nbsp;{{$project->state}}</br>
                                Company &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- &nbsp;{{$project->company}}<br/>
                                project members&nbsp;&nbsp;- (&nbsp;{{$project->project_member}} &nbsp;)&nbsp;members<br/>
                                    
                                </p>
                                <p  class="card-footer text-center">
                                <a href="{{ action('ProjectController@show',$project->id) }}" class="btn btn-outline-primary"><i class='bx bxs-user nav_icon'></i> Detail</a>
                                <a href="{{ action('ProjectController@pdf',$project->id) }}" class="btn btn-outline-primary ">  <i class='bx bxs-file nav_icon'></i> Contract Export</a>
                                </p>
                            </div><!-- End CardBody-->
                         </div><!-- End Card-->
                        
                    </div><!-- End CardColumn-->
        @endforeach
        </div><!-- End Row-->
        </br><br>
        <div class="pagination justify-content-center">
            {!! $projects->links("pagination::bootstrap-4") !!}
        </div>
     </div><!-- End Container-->
     @if(!$projects=='')
     <a href="#top">Back to top</a>
     @endif
 </div><!--End Side Bar Column -->
</div>  <!--Container Main end-->
@endsection
