@extends('admin.layout')
@section('title','ড্যাশবোর্ড')
@section('content')
<h1>ড্যাশবোর্ড</h1>
<div class="form-row" style="margin-top:12px; gap: 20px;">
    <div style="background:#1f2937;border:1px solid rgba(255,255,255,.06);border-radius:12px;padding:20px; flex: 1; min-width: 200px;">
        <div class="muted">মোট ইভেন্ট</div>
        <div style="font-size:2rem;font-weight:700">{{ $eventCount }}</div>
    </div>
    <div style="background:#1f2937;border:1px solid rgba(255,255,255,.06);border-radius:12px;padding:20px; flex: 1; min-width: 200px;">
        <div class="muted">মোট কার্যক্রম</div>
        <div style="font-size:2rem;font-weight:700">{{ $workshopCount }}</div>
    </div>
    <div style="background:#1f2937;border:1px solid rgba(255,255,255,.06);border-radius:12px;padding:20px; flex: 1; min-width: 200px;">
        <div class="muted">মোট ব্লগ</div>
        <div style="font-size:2rem;font-weight:700">{{ $blogCount }}</div>
    </div>
</div>
<div class="form-row" style="margin-top:20px; gap: 20px;">
    <div style="background:#1f2937;border:1px solid rgba(255,255,255,.06);border-radius:12px;padding:20px; flex: 1; min-width: 200px;">
        <div class="muted">নিউজলেটার</div>
        <div style="font-size:2rem;font-weight:700">{{ $newsletterCount }}</div>
    </div>
    <div style="background:#1f2937;border:1px solid rgba(255,255,255,.06);border-radius:12px;padding:20px; flex: 1; min-width: 200px;">
        <div class="muted">নিবন্ধন ফরম</div>
        <div style="font-size:2rem;font-weight:700">{{ $nibondonCount }}</div>
    </div>
    <div style="background:#1f2937;border:1px solid rgba(255,255,255,.06);border-radius:12px;padding:20px; flex: 1; min-width: 200px;">
        <div class="muted">যোগাযোগ মেসেজ</div>
        <div style="font-size:2rem;font-weight:700">{{ $communicationCount }}</div>
    </div>
</div>
@endsection
