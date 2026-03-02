@extends('admin.layout')
@section('title','কার্যক্রম')
@section('content')
<div class="top-actions">
    <h1>কার্যক্রম</h1>
    <a class="btn" href="{{ route('admin.karjokroms.create') }}">নতুন আইটেম</a>
</div>
<div class="top-actions">
    <div class="muted">মোট {{ $items->total() }}টি</div>
    <div></div>
</div>
<table>
    <thead>
        <tr>
            <th>শিরোনাম</th>
            <th>ইমেজ</th>
            <th>তৈরি</th>
            <th>অ্যাকশন</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $it)
        <tr>
            <td>{{ $it->title }}</td>
            <td>{{ $it->image }}</td>
            <td>{{ optional($it->created_at)->format('Y-m-d') }}</td>
            <td class="actions">
                <a class="btn" href="{{ route('admin.karjokroms.edit',$it) }}">এডিট</a>
                <form action="{{ route('admin.karjokroms.destroy',$it) }}" method="POST" onsubmit="return confirm('ডিলিট করবেন?')">
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
    {{ $items->links() }}
</div>
@endsection
