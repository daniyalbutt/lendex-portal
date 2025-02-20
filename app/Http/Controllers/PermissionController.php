<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use DB;

class PermissionController extends Controller
{
    
    function __construct(){
        $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete', ['only' => ['index','store']]);
        $this->middleware('permission:permission-create', ['only' => ['create','store']]);
        $this->middleware('permission:permission-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request){
        $data = Permission::orderBy('id','DESC')->get();
        return view('permissions.index',compact('data'));
    }

    public function create(){
        return view('permissions.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:permissions,name',
        ]);
        $data = Permission::create(['name' => $request->input('name')]);
        return redirect()->route('permissions.index')->with('success','Permission created successfully');
    }

    public function show($id){
        $data = Permission::find($id);
        return view('permissions.show',compact('data'));
    }

    public function edit($id){
        $data = Permission::find($id);
        return view('permissions.edit',compact('data'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
        ]);
        $data = Permission::find($id);
        $data->name = $request->input('name');
        $data->save();    
        return redirect()->route('permissions.index')->with('success','Permission updated successfully');
    }

    public function destroy($id){
        DB::table("role_has_permissions")->where('permission_id',$id)->delete();
        DB::table("permissions")->where('id',$id)->delete();
        return redirect()->route('permissions.index')->with('success','Permission deleted successfully');
    }
    
}
