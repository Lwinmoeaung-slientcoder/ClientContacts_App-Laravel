<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\ContactProject;
use App\ProjectInfo;
use App\Contacts;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function search(Request $request){
        $search = $request->input('search'); 
        // Search in the title and body columns from the posts table
        $posts = Contacts::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->orWhere('company', 'LIKE', "%{$search}%")
                ->orWhere('position', 'LIKE', "%{$search}%")
                ->get();
        return view('search', compact('posts'));
    }

    public function allusersview(){
        $users=User::all();
        return view('auth.userprofile',compact('users'));
    }

    public function userupdate(UserRequest $request , $id ){
        $users=User::whereId($id)->firstorFail();
        $users->name          =$request->get('name');
        $users->email         =$request->get('email');
        $users->password      =Hash::make($request->get('password'));
        $users->role          =$request->get('role');
        $users->update();
        return redirect()->back()->with('status','Successfully Updated');
    }

    public function usereditview($id){
        $useracc=User::whereId($id)->firstorFail();
        return view('auth.userupdate',compact('useracc'));
    }

    public function userdelete(Request $request){
        $userid=$request->get('id');
        $result=User::where('id','=',$userid);
        $result->delete();
        return redirect()->back()->with('status','Successfully Deleted');
    }

    public function dashboardtable(){
        $contactdatalists=Contacts::paginate(8);
        $projectdatalists=ProjectInfo::paginate(8);
        return view('dashboard',compact(['contactdatalists','projectdatalists']));
    }
 
 
}
