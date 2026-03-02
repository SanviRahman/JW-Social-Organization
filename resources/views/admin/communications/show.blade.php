@extends('admin.layout')
@section('title','মেসেজ বিস্তারিত')
@section('content')
<div class="top-actions">
    <h1>মেসেজ বিস্তারিত</h1>
    <a class="btn" href="{{ route('admin.communications.index') }}">ফিরে যান</a>
</div>
<div style="background:#1f2937; padding: 25px; border-radius: 15px; border: 1px solid rgba(255,255,255,.05);">
    <p><strong>নাম:</strong> {{ $communication->name }}</p>
    <p><strong>ফোন:</strong> {{ $communication->phone }}</p>
    <p><strong>ইমেইল:</strong> {{ $communication->email }}</p>
    <p><strong>মেসেজ:</strong></p>
    <div style="background:#111827; padding:15px; border-radius:10px; margin-top:10px; white-space: pre-wrap;">{{ $communication->message }}</div>
    <p style="margin-top:20px"><strong>সাবমিট হয়েছে:</strong> {{ $communication->created_at->format('d M Y, h:i A') }}</p>
</div>
@endsection
