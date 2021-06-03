@extends('layouts.master')
@section('title','contacts')

@section('content')

    <div class="container-fluid">
        <div class="row">
        @foreach($contacts as $contact)
                 <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/Contactimage/'.$contact->file)}}" style="width:265px;height:220px" alt="Image Not Found">
                            <div class="card-body">
                                <h5 class="card-title">{{$contact->name}}</h5>
                                <p class="card-text">
                                
                                Postion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- &nbsp;{{$contact->position}}</br>
                                Company &nbsp;&nbsp;- &nbsp;{{$contact->company}}<br/>
                                Phone No.&nbsp;&nbsp;- &nbsp;{{$contact->phonenumber}}<br/>
                                    
                                </p>
                                <p  class="card-footer text-center">
                                <a href="{{ action('ContactsController@show',$contact->id) }}" class="btn btn-outline-primary"><i class='bx bxs-user nav_icon'></i> Profile</a>
                                <a href="#" class="btn btn-outline-primary ">  <i class='bx bx-envelope nav_icon'></i> Contact</a>
                                </p>
                            </div><!-- End CardBody-->
                         </div><!-- End Card-->
                        
                    </div><!-- End CardColumn-->
        @endforeach
        </div><!-- End Row-->
        </br><br>
        <div class="pagination justify-content-center">
            {!! $contacts->links("pagination::bootstrap-4") !!}
        </div>
     </div><!-- End Container-->
     @if(!$contacts=='')
     <a href="#top">Back to top</a>
     @endif
 </div><!--End Side Bar Column -->
</div>  <!--Container Main end-->
@endsection
