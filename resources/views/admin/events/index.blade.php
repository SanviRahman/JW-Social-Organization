@extends('admin.layout')
@section('title','ইভেন্ট')
@section('content')
<div class="top-actions">
    <h1>ইভেন্ট</h1>
    <a class="btn" href="{{ route('admin.events.create') }}">নতুন ইভেন্ট</a>
</div>
<div class="top-actions" style="margin-top: 10px;">
    <div class="muted">মোট {{ $events->total() }}টি</div>
</div>
<table>
    <thead>
        <tr>
            <th>শিরোনাম</th>
            <th>তারিখ</th>
            <th>সময়</th>
            <th>স্থান</th>
            <th>অ্যাকশন</th>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $e)
        <tr>
            <td>{{ $e->title }}</td>
            <td>{{ optional($e->event_date)->format('Y-m-d') }}</td>
            <td>{{ $e->event_time }}</td>
            <td>{{ $e->location }}</td>
            <td class="actions">
                <a class="btn" href="{{ route('admin.events.edit',$e) }}">এডিট</a>
                <form action="{{ route('admin.events.destroy',$e) }}" method="POST" onsubmit="return confirm('ডিলিট করবেন?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">ডিলিট</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <div class="pagination">
        {{ $events->links('pagination::bootstrap-4') }}
    </div>
@endsection
