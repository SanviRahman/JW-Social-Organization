@extends('admin.layout')
@section('title','নতুন ইভেন্ট')
@section('content')
<div class="top-actions">
    <h1>নতুন ইভেন্ট</h1>
    <a class="btn" href="{{ route('admin.events.index') }}">সব ইভেন্ট</a>
</div>
<form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div>
            <label>শিরোনাম</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label>ইমেজ আপলোড</label>
            <input type="file" name="image" accept="image/*">
        </div>
        <div>
            <label>তারিখ</label>
            <input type="date" name="event_date" value="{{ old('event_date') }}">
        </div>
        <div>
            <label>সময়</label>
            <input type="time" name="event_time" value="{{ old('event_time') }}">
        </div>
        <div>
            <label>স্থান</label>
            <input type="text" name="location" value="{{ old('location') }}">
        </div>
    </div>
    <div style="margin-top:12px">
        <label>বিবরণ</label>
        <textarea name="description" rows="6">{{ old('description') }}</textarea>
    </div>
    <div style="margin-top:16px">
        <button class="btn" type="submit">সেভ</button>
    </div>
</form>
@endsection
