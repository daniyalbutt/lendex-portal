<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Document;
use Hash;
use DB;
use Illuminate\Support\Arr;

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
        $total_app = DB::table('documents')->count();
        $total_approved = DB::table('documents')->where('status', 1)->count();
        $total_rejected = DB::table('documents')->where('status', 2)->count();
        $total_pending = DB::table('documents')->where('status', 0)->count();
        $data = Document::orderBy('updated_at','DESC')->where('status', '!=', 0)->get();
        return view('home', compact('total_app', 'total_approved', 'total_rejected', 'total_pending', 'data'));
    }

    public function profile(){
        $user = Auth()->user();
        return view('profile', compact('user'));
    }

    public function profileUpdate(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
        ]);
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
        $user = User::find($id);
        $user->update($input);
        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }
}
