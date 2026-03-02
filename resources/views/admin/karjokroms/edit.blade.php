@extends('admin.layout')
@section('title','কার্যক্রম এডিট')
@section('content')
<div class="top-actions">
    <h1>কার্যক্রম এডিট</h1>
    <a class="btn" href="{{ route('admin.karjokroms.index') }}">সব আইটেম</a>
</div>
<form action="{{ route('admin.karjokroms.update',$item) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div>
            <label>শিরোনাম</label>
            <input type="text" name="title" value="{{ old('title',$item->title) }}">
        </div>
        <div>
            <label>ইমেজ পাথ</label>
            <input type="text" name="image" value="{{ old('image',$item->image) }}">
        </div>
    </div>
    <div style="margin-top:12px">
        <label>বিবরণ</label>
        <textarea name="description" rows="6">{{ old('description',$item->description) }}</textarea>
    </div>
    <div style="margin-top:16px">
        <button class="btn" type="submit">আপডেট</button>
    </div>
    </form>
@endsection
