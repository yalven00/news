@extends('layouts.app')
  
@section('title', 'Index News')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List News</h1>
        <a href="{{ route('news.create') }}" class="btn btn-primary">Add News</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Content</th>
                <th>Description</th>
                <th>Author</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($news->count() > 0)
                @foreach($news as $rs)
                    <tr>
                        <td class="align-middle">{{ $news->title }}</td>
                        <td class="align-middle">{{ $news->slug }}</td>
                        <td class="align-middle">{{ $news->content }}</td>
                        <td class="align-middle">{{ $news->description }}</td> 
                         <td class="align-middle">{{ $news->author }}</td> 
                          <td class="align-middle">{{ $news->category }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('news.show', $news->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('news.edit', $news->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('news.destroy', $news->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
             {!! $news->links() !!};
            @else
                <tr>
                    <td class="text-center" colspan="5">No any news found</td>
                </tr>
            @endif
        </tbody>
    </table>