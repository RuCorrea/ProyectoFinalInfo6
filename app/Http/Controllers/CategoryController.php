<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Categories = Category::orderBy('created_at', 'desc')->paginate(2);
        // dd($posts); //Muestra lo que contiene la variable posts con todos sus atributos
        return view("dashboard.post.posts", [
            'Category' => $Categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("dashboard.post.create",[
            'Category' => new Category()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
        //var_dump($request);
        //dd($request);
        /*$validated = $request->validate([
            'title' => 'required | min:10 | max:500',
            'url_clean' => 'required',
            'content' => 'min:1 | max:500'
        ]);
        dd($request->validated());

        //ModelsPosts::create($validated);
        */
        Category::create($request->validated());

        return back()->with('status', 'Ya quedo Prro');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //  return "Show: " $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $Category)
    {
        //dd($post);
        return view('dashboard.post.edit', [
            'Category' => $Category
        ]);
        //return "Edit: " $id;
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, Category $category)
    {
        //
        //dd($request->validated());

    /**
    * Post->update([
    *    'title' -> $request->title,
    *    
    *])
    **/

        $category->update($request->validated());
        return back()->with('status', 'Ya quedo Prro');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //dd($posts);
        $category->delete();
        return back()->with('status', 'Ya quedo eliminado de la BD prro');

        //
    }
}
