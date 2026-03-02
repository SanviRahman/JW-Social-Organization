@extends('admin.layout')
@section('title','ব্লগ এডিট')
@section('content')
<div class="top-actions">
    <h1>ব্লগ এডিট</h1>
    <a class="btn" href="{{ route('admin.blogs.index') }}">ফিরে যান</a>
</div>

<form action="{{ route('admin.blogs.update', $blog) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group">
            <label>শিরোনাম</label>
            <input type="text" name="title" required value="{{ old('title', $blog->title) }}">
        </div>
        <div class="form-group">
            <label>তারিখ (যেমন: ১২/১১/২০২৪)</label>
            <input type="text" name="date" value="{{ old('date', $blog->date) }}">
        </div>
    </div>
    <div class="form-group">
        <label>ইমেজ পাথ (image/...) </label>
        <input type="text" name="image" value="{{ old('image', $blog->image) }}">
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
