<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class PageController extends Controller
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
        $data = Page::orderBy('id', 'desc')->get();
        return view('pages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:pages,name',
        ]);
        $data = new Page();
        $data->name = $request->name;
        if($request->slug != null){
            $data->slug = $request->slug;
        }else{
            $data->slug = Str::slug($request->name);
        }
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $store_path = "upload/pages";
            $name = md5(uniqid(rand(), true)) . str_replace(' ', '-', $image->getClientOriginalName());
            $image->move(public_path('/' . $store_path), $name);
            $data->image = $store_path . '/' . $name;
        }
        $data->seo_title = $request->seo_title;
        $data->seo_keywords = $request->seo_keywords;
        $data->seo_descriptions = $request->seo_descriptions;
        $data->status = $request->status;
        $data->published_date = $request->published_date;
        $data->save();
        return redirect()->back()->with('success', 'Page created Successfully');
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
    public function edit($id)
    {
        $data = Page::find($id);
        return view('pages.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $data = Page::find($page->id);
        $data->name = $request->name;
        if($request->slug != null){
            $data->slug = $request->slug;
        }else{
            $data->slug = Str::slug($request->name);
        }
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $store_path = "upload/pages";
            $name = md5(uniqid(rand(), true)) . str_replace(' ', '-', $image->getClientOriginalName());
            $image->move(public_path('/' . $store_path), $name);
            $data->image = $store_path . '/' . $name;
        }
        $data->seo_title = $request->seo_title;
        $data->seo_keywords = $request->seo_keywords;
        $data->seo_descriptions = $request->seo_descriptions;
        $data->status = $request->status;
        $data->published_date = $request->published_date;
        $data->save();
        
        $group = $request->group;
        $data_array = array();
        foreach($group as $key => $value){
            foreach($value as $inner_key => $inner_value){
                $data_array[$inner_key][$key] = $inner_value;
            }
        }
        foreach($data_array as $key => $value){
            DB::table('sections')->where('id', $inner_key)
            ->update([
                'value' => json_encode($value),
            ]);
        }

        return redirect()->back()->with('success', 'Page Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
    
}
