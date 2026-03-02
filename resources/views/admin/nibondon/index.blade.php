@extends('admin.layout')
@section('title','নিবন্ধন')
@section('content')
<div class="top-actions">
    <h1>নিবন্ধন ফরম সাবমিশন</h1>
    <div class="muted">মোট {{ $submissions->total() }}টি</div>
</div>
<table>
    <thead>
        <tr>
            <th>নাম</th>
            <th>ফোন</th>
            <th>ইমেইল</th>
            <th>অ্যাকশন</th>
        </tr>
    </thead>
    <tbody>
        @foreach($submissions as $s)
        <tr>
            <td>{{ $s->name }}</td>
            <td>{{ $s->phone }}</td>
            <td>{{ $s->email }}</td>
            <td class="actions">
                <a class="btn" href="{{ route('admin.nibondon.show',$s) }}">বিস্তারিত</a>
                <form action="{{ route('admin.nibondon.destroy',$s) }}" method="POST" onsubmit="return confirm('ডিলিট করবেন?')">
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
    {{ $submissions->links() }}
</div>
@endsection
