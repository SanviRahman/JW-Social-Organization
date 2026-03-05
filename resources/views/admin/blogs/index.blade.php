@extends('admin.layout')
@section('title','ব্লগ')
@section('content')
<div class="top-actions">
    <h1>ব্লগ</h1>
    <a class="btn" href="{{ route('admin.blogs.create') }}">নতুন ব্লগ</a>
</div>
<div class="top-actions" style="margin-top: 10px;">
    <div class="muted">মোট {{ $blogs->total() }}টি</div>
</div>
<table>
    <thead>
        <tr>
            <th>ইমেজ</th>
            <th>শিরোনাম</th>
            <th>তারিখ</th>
            <th>অ্যাকশন</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $b)
        <tr>
            <td>
                @if($b->image)
                    <img src="{{ asset($b->image) }}" width="60" style="border-radius: 5px;">
                @else
                    <span class="muted">নো ইমেজ</span>
                @endif
            </td>
            <td>{{ $b->title }}</td>
            <td>{{ $b->date }}</td>
            <td class="actions">
                <a class="btn" href="{{ route('admin.blogs.edit',$b) }}">এডিট</a>
                <form action="{{ route('admin.blogs.destroy',$b) }}" method="POST" onsubmit="return confirm('ডিলিট করবেন?')">
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
    {{ $blogs->links('pagination::bootstrap-4') }}
</div>
@endsection
