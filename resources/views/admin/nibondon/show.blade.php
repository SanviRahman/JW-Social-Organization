@extends('admin.layout')
@section('title','নিবন্ধন বিস্তারিত')
@section('content')
<div class="top-actions">
    <h1>নিবন্ধন বিস্তারিত</h1>
    <a class="btn" href="{{ route('admin.nibondon.index') }}">ফিরে যান</a>
</div>
<div style="background:#1f2937; padding: 25px; border-radius: 15px; border: 1px solid rgba(255,255,255,.05);">
    <p><strong>নাম:</strong> {{ $nibondon->name }}</p>
    <p><strong>ফোন:</strong> {{ $nibondon->phone }}</p>
    <p><strong>ইমেইল:</strong> {{ $nibondon->email }}</p>
    <p><strong>আগ্রহের বিষয়:</strong> {{ $nibondon->interests }}</p>
    <p><strong>সাবমিট হয়েছে:</strong> {{ $nibondon->created_at->format('d M Y, h:i A') }}</p>
</div>
@endsection
