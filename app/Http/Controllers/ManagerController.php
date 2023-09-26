<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Http\Requests\CreateNewsRequest;
use Http\Requests\UpdateNewsRequest;
use Auth;

class ManagerController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth','manager');
    }
 
    public function index()
    {
        $news = News::orderBy('created_at', 'DESC')->paginate(5);   
  
        return view('news.index', compact('news'));
    }
  
  
    public function create()
    {
        return view('news.create');
    }
  
   
    public function store(CreateNewsRequest $request)
    {
        News::create($request->all());
 
        return redirect()->route('news')->with('success', 'News was added successfully');
    }
  
   
    public function show(string $id)
    {
        $news = News::findOrFail($id);
  
        return view('news.show', compact('news'));
    }
  
 
    public function edit(string $id)
    {
        $news =  News::findOrFail($id);
  
        return view('news.edit', compact('news'));
    }
  
 
    public function update(UpdateNewsRequest $request, string $id)
    {
        $news = News::findOrFail($id);
  
        $news->update($request->all());
  
        return redirect()->route('newss')->with('success', 'News was updated successfully');
    }
  
 
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);
  
        $news->delete();
  
        return redirect()->route('news')->with('success', 'News was deleted successfully');
    }
}
