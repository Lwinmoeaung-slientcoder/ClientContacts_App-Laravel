<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Contacts;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contacts::paginate(8);
        return view('Contacts.contactsview',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Contacts.createcontacts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactsRequest $request)
    {
        $file=$request->file('file');
        $foldername="/Contactimage/";
        $filename=uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().$foldername,$filename);
        if($request->get('phonenumber2')==""){
            $phonenumber2="-";
        }else{
            $phonenumber2=$request->get('phonenumber2');
        }
        Contacts::create(
            [
                'name'          =>$request->get('name'),
                'email'         =>$request->get('email'),
                'phonenumber'   =>$request->get('phonenumber'),
                'phonenumber2'  =>$phonenumber2,
                'company'       =>$request->get('company'),
                'position'      =>$request->get('position'),
                'file'          =>$filename,
                'totalproject'  =>$request->get('totalproject'),
            ]
        );
        return redirect()->back()->with('status','Sccessfully Inserted');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profiledata=Contacts::whereId($id)->firstorFail();
        return view('Contacts.contactprofile', compact('profiledata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactsRequest $request, $id)
    {
        $file=$request->file('file');
        $foldername="/Contactimage/";
        $filename=uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().$foldername,$filename);
        if($request->get('phonenumber2')==""){
            $phonenumber2="-";
        }else{
            $phonenumber2=$request->get('phonenumber2');
        }
        $profiledata=ProductLists::whereId($id)->firstorFail();
        $profiledata->name          =$request->get('name');
        $profiledata->email         =$request->get('email');
        $profiledata->phonenumber   =$request->get('phonenumber');
        $profiledata->phonenumber2  =$phonenumber2;
        $profiledata->company       =$request->get('company');
        $profiledata->position      =$request->get('position');
        $profiledata->file          =$filename;
        $profiledata->totalproject  =$request->get('totalproject');
        $profiledata->update();
        return redirect()->back()->with('status','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result=ProductLists::where('id','=',$id);
        $result->destory();
        return redirect()->back()->with('status','Successfully Deleted');
    }
}
