@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}", method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Email address</label>
                <input name="content" type="text" class="form-control" id="content">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
