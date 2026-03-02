@extends('admin.layout')
@section('title','ইভেন্ট এডিট')
@section('content')
<div class="top-actions">
    <h1>ইভেন্ট এডিট</h1>
    <a class="btn" href="{{ route('admin.events.index') }}">সব ইভেন্ট</a>
</div>
<form action="{{ route('admin.events.update',$event) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div>
            <label>শিরোনাম</label>
            <input type="text" name="title" value="{{ old('title',$event->title) }}" required>
        </div>
        <div>
            <label>ইমেজ পাথ</label>
            <input type="text" name="image" value="{{ old('image',$event->image) }}">
        </div>
        <div>
            <label>তারিখ</label>
            <input type="date" name="event_date" value="{{ old('event_date',optional($event->event_date)->format('Y-m-d')) }}">
        </div>
        <div>
            <label>সময়</label>
            <input type="time" name="event_time" value="{{ old('event_time',$event->event_time) }}">
        </div>
        <div>
            <label>স্থান</label>
            <input type="text" name="location" value="{{ old('location',$event->location) }}">
        </div>
    </div>
    <div style="margin-top:12px">
        <label>বিবরণ</label>
        <textarea name="description" rows="6">{{ old('description',$event->description) }}</textarea>
    </div>
    <div style="margin-top:16px">
        <button class="btn" type="submit">আপডেট</button>
    </div>
</form>
@endsection
