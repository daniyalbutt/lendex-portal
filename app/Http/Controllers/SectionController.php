<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SectionController extends Controller
{

    function __construct(){
        $this->middleware('permission:page-list|page-create|page-edit|page-delete', ['only' => ['index','show']]);
        $this->middleware('permission:page-create', ['only' => ['create','store']]);
        $this->middleware('permission:page-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:page-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $page_edit = $request->page_edit;
        if($page_edit == 1){
            $section_id = $request->section_id;
            foreach($section_id as $key => $value){
                $data = Section::find($value);
                $new_data = $data->replicate();
                $new_data->is_repeater = $data->is_repeater + 1;
                $new_data->save();
            }
            return response()->json(['status'=> true], 200);
        }else{
            $this->validate($request, [
                'name' => 'required',
                'type' => 'required'
            ]);
    
            $data = new Section();
            $data->name = $request->name;
            $data->type = $request->type;
            $data->page_id = $request->page_id;
            $data->slug = Str::slug($request->name);
            $data->save();
            if($request->type == 3){
                $section = $request->section;
                foreach($section as $key => $value){
                    if($value['name'] != null){
                        $inner_data = new Section();
                        $inner_data->name = $value['name'];
                        $inner_data->slug = Str::slug($value['name']);
                        $inner_data->type = $value['type'];
                        $inner_data->is_repeater = 1;
                        $inner_data->section_id = $data->id;
                        $inner_data->page_id = $request->page_id;
                        $inner_data->save();
                    }
                }
            }
            return response()->json(['status'=> true], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
    
}
