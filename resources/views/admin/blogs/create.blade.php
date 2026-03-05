@extends('admin.layout')
@section('title','নতুন ব্লগ')
@section('content')
<div class="top-actions">
    <h1>নতুন ব্লগ</h1>
    <a class="btn" href="{{ route('admin.blogs.index') }}">ফিরে যান</a>
</div>

<form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group">
            <label>শিরোনাম</label>
            <input type="text" name="title" required value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label>তারিখ</label>
            <input type="date" name="date" value="{{ old('date') }}">
        </div>
    </div>
    <div class="form-group">
        <label>ইমেজ আপলোড</label>
        <input type="file" name="image" accept="image/*">
    </div>
    <div class="form-group">
        <label>বর্ণনা</label>
        <textarea name="description" rows="10" required>{{ old('description') }}</textarea>
    </div>
    <div style="margin-top:20px">
        <button class="btn" type="submit">সেভ</button>
    </div>
</form>
@endsection
