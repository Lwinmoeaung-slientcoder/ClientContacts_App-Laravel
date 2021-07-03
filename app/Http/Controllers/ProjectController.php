<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectInfo;
use App\Contacts;
use App\Http\Requests\ProjectRequest;
use PDF;
use Alert;


class ProjectController extends Controller
{
   public function index(){
      $projects=ProjectInfo::paginate(8);
      return view('Contacts.projectview',compact('projects'));
   }
   public function createview(){
    $contacts=Contacts::All();
    return view('Contacts.createprojects',compact('contacts'));
}
   public function create(ProjectRequest $request){
 
    ProjectInfo::create(
        [
            'project_name'          =>$request->get('project_name'),
            'company'               =>$request->get('company'),
            'state'                 =>$request->get('state'),
            'project_member'        =>$request->get('project_member'),
            'amount'                =>$request->get('amount'),
            'startdate'             =>$request->get('startdate'),
            'enddate'               =>$request->get('enddate'),
            'contactname'           =>$request->get('contactname'),
        ]
    );
    $profiledata=Contacts::where('name',$request->get('contactname'))->firstorFail();
    $profiledata->totalproject  =(int)$profiledata->totalproject+1;
    $profiledata->update();
    Alert::success('Portfolio Details', 'added successfully');
    return redirect()->back()->with('status','Sccessfully Inserted');
  
   }

   public function update(ProjectRequest $request,$id){
    $profiledata=ProjectInfo::whereId($id)->firstorFail();
    if($profiledata->contactname!=$request->get('contactname')){
        //Contact total Project Count Minus
        $projectcount_update=Contacts::where('name',$profiledata->contactname)->firstorFail();
        $projectcount_update->totalproject  =(int)$projectcount_update->totalproject-1;
        $projectcount_update->update();
        //Contact total Project Count Add
        $projectcount_update=Contacts::where('name',$request->get('contactname'))->firstorFail();
        $projectcount_update->totalproject  =(int)$projectcount_update->totalproject+1;
        $projectcount_update->update();
    }
    $profiledata->project_name          =$request->get('project_name');
    $profiledata->company               =$request->get('company');
    $profiledata->state                 =$request->get('state');
    $profiledata->project_member        =$request->get('project_member');
    $profiledata->amount                =$request->get('amount');
    $profiledata->startdate             =$request->get('startdate');
    $profiledata->enddate               =$request->get('enddate');
    $profiledata->contactname           =$request->get('contactname');
    $profiledata->update();
  
    return redirect()->back()->with('status','Successfully Updated');
   }

   public function delete($id){
    $result=ProjectInfo::whereID($id)->firstorfail();
    $result->delete();
    return redirect()->back()->with('status','Sccessfully Inserted');
   }
   public function show($id)
   {
       $contacts=Contacts::All();
       $profiledata=ProjectInfo::whereId($id)->firstorFail();
       return view('Contacts.projectprofile', compact(['profiledata','contacts']));
   }
   public function pdf($id){
    $contractdata=ProjectInfo::whereId($id)->firstorFail();
    $customPaper = array(0,0,750,1300);
    $pdf = PDF::loadView('contractform',compact('contractdata'))->setPaper($customPaper, 'landscape');
    return $pdf->download('contract.pdf');
   }
}
