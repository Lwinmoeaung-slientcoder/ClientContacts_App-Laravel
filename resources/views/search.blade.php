@extends('layouts.master')
@section('title','search')

@section('content')

    <div class="container-fluid">
        <div class="row">
        @foreach($posts as $post)
                 <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/Contactimage/'.$post->file)}}" style="width:265px;height:220px" alt="Image Not Found">
                            <div class="card-body">
                                <h5 class="card-title">{{$post->name}}</h5>
                                <p class="card-text">
                                
                                Postion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- &nbsp;{{$post->position}}</br>
                                Company &nbsp;&nbsp;- &nbsp;{{$post->company}}<br/>
                                Phone No.&nbsp;&nbsp;- &nbsp;{{$post->phonenumber}}<br/>
                                    
                                </p>
                                <p  class="card-footer text-center">
                                <a href="{{ action('ContactsController@show',$post->id) }}" class="btn btn-primary"><i class='bx bxs-user nav_icon'></i> Profile</a>
                                <a href="#" class="btn btn-primary ">  <i class='bx bx-envelope nav_icon'></i> Contact</a>
                                </p>
                            </div><!-- End CardBody-->
                         </div><!-- End Card-->
                        
                    </div><!-- End CardColumn-->
        @endforeach
        </div><!-- End Row-->
     </div><!-- End Container-->
 </div><!--End Side Bar Column -->
</div>  <!--Container Main end-->
@endsection
