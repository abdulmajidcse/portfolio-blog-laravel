<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogCategories = BlogCategory::orderBy('id', 'desc')->get();
        return view('admin.blog_category.index', ['blogCategories' => $blogCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|unique:blog_categories',
            'slug'            => 'required|string|unique:blog_categories',
            'seo_keyword'     => 'nullable|string',
            'seo_description' => 'nullable|string',
        ]);

        $blogCategory                  = new BlogCategory();
        $blogCategory->name            = $request->name;
        $blogCategory->slug            = Str::slug($request->slug, '-');
        $blogCategory->seo_keyword     = $request->seo_keyword;
        $blogCategory->seo_description = $request->seo_description;
        $blogCategory->save();
        
        $request->session()->flash('message', 'Blog Category Saved.');
        $request->session()->flash('alert-type', 'success');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategory)
    {
        return view('admin.blog_category.edit', ['blogCategory' => $blogCategory]);
    }


    public function test(BlogCategory $blogCategory)
    {
        return $blogCategory;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
        $request->validate([
            'name'            => 'required|string|unique:blog_categories,name,'.$blogCategory->id,
            'slug'            => 'required|string|unique:blog_categories,slug,'.$blogCategory->id,
            'seo_keyword'     => 'nullable|string',
            'seo_description' => 'nullable|string',
        ]);

        $blogCategory->name            = $request->name;
        $blogCategory->slug            = Str::slug($request->slug, '-');
        $blogCategory->seo_keyword     = $request->seo_keyword;
        $blogCategory->seo_description = $request->seo_description;
        $blogCategory->save();
        
        $request->session()->flash('message', 'Blog Category Saved.');
        $request->session()->flash('alert-type', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BlogCategory $blogCategory)
    {
        $blogCategory->delete();

        $request->session()->flash('message', 'Blog Category Deleted.');
        $request->session()->flash('alert-type', 'success');
        return redirect()->back();
    }
}
