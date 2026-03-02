@extends('admin.layout')
@section('title','নতুন কার্যক্রম')
@section('content')
<div class="top-actions">
    <h1>নতুন কার্যক্রম</h1>
    <a class="btn" href="{{ route('admin.karjokroms.index') }}">সব আইটেম</a>
</div>
<form action="{{ route('admin.karjokroms.store') }}" method="POST">
    @csrf
    <div class="form-row">
        <div>
            <label>শিরোনাম</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label>ইমেজ পাথ</label>
            <input type="text" name="image" value="{{ old('image') }}">
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
