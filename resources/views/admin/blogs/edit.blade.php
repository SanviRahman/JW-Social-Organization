@extends('admin.layout')
@section('title','ব্লগ এডিট')
@section('content')
<div class="top-actions">
    <h1>ব্লগ এডিট</h1>
    <a class="btn" href="{{ route('admin.blogs.index') }}">ফিরে যান</a>
</div>

<form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group">
            <label>শিরোনাম</label>
            <input type="text" name="title" required value="{{ old('title', $blog->title) }}">
        </div>
        <div class="form-group">
            <label>তারিখ</label>
            <input type="date" name="date" value="{{ old('date', $blog->date) }}">
        </div>
    </div>
    <div class="form-group">
        <label>ইমেজ আপলোড</label>
        <input type="file" name="image" accept="image/*">
        @if($blog->image)
            <div style="margin-top: 5px;">
                <img src="{{ asset($blog->image) }}" width="80" style="border-radius: 5px;">
            </div>
        @endif
    </div>
    <div class="form-group">
        <label>বর্ণনা</label>
        <textarea name="description" rows="10" required>{{ old('description', $blog->description) }}</textarea>
    </div>
    <div style="margin-top:20px">
        <button class="btn" type="submit">আপডেট</button>
    </div>
</form>
@endsection
