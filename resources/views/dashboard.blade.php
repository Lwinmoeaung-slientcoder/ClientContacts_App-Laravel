@extends('layouts.master')
@section('title','dashboard')

@section('content')

    <div class="container-fluid">
        <div class="row">
        <div class="container">
        <span class="badge badge-info"><font size="5">Contact List Table</font></span><br/><br/>
     
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Company</th>
                        <th>Position</th>
                        <th>Phone Number</th>
                        <th>Total Project</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contactdatalists as $contactdatalist)
                    <tr>
                   
                        <td>{{$contactdatalist->id}}</td>
                        <td>{{$contactdatalist->name}}</td>
                        <td>{{$contactdatalist->email}}</td>
                        <td>{{$contactdatalist->company}}</td>
                        <td>{{$contactdatalist->position}}</td>
                        <td>{{$contactdatalist->phonenumber}}</td>
                        <td>{{$contactdatalist->totalproject}}</td>
                    </tr>

                  @endforeach
                </tbody>
              
            </table>
           
        </div> <!-- End Table1 Row -->
        </div> <!-- End table 1 Container -->
                <div class="pagination justify-content-center">
                {!! $contactdatalists->links("pagination::bootstrap-4") !!}
            </div>
       

        <div class="row">
            <div class="container">
            <span class="badge badge-warning"><font size="5">Project List Table</font></span><br/><br/>
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Project Name</th>
                        <th>Customer Name</th>
                        <th>Comapany</th>
                        <th>Project Member</th>
                        <th>State</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($projectdatalists as $projectdatalist)
                    <tr>
                        <td>{{$projectdatalist->id}}</td>
                        <td>{{$projectdatalist->project_name}}</td>
                        <td>{{$projectdatalist->contactname}}</td>
                        <td>{{$projectdatalist->company}}</td>
                        <td>{{$projectdatalist->project_member}}</td>
                        @if($projectdatalist->state=='ongoing')
                        <td><span class="badge badge-info">{{$projectdatalist->state}}</span></td>
                        @elseif($projectdatalist->state=='finish')
                        <td><span class="badge badge-success">{{$projectdatalist->state}}</span></td>
                        @else
                        <td><span class="badge badge-danger">{{$projectdatalist->state}}</span></td>
                        @endif
                        <td>{{$projectdatalist->amount}}</td>
                    </tr>

                  @endforeach
                </tbody>
            </table>
             </div> <!-- End Table Two Container -->
     </div> <!-- End Table2 Row -->
     <div class="pagination justify-content-center">
                {!! $projectdatalists->links("pagination::bootstrap-4") !!}
            </div>

        </div><!-- End Row-->
     </div><!-- End Container-->
 </div><!--End Side Bar Column -->
</div>  <!--Container Main end-->
@endsection
