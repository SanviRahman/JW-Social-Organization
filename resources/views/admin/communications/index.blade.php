@extends('admin.layout')
@section('title','যোগাযোগ')
@section('content')
<div class="top-actions">
    <h1>যোগাযোগ মেসেজ</h1>
    <div class="muted">মোট {{ $messages->total() }}টি</div>
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
        @foreach($messages as $m)
        <tr>
            <td>{{ $m->name }}</td>
            <td>{{ $m->phone }}</td>
            <td>{{ $m->email }}</td>
            <td class="actions">
                <a class="btn" href="{{ route('admin.communications.show',$m) }}">বিস্তারিত</a>
                <form action="{{ route('admin.communications.destroy',$m) }}" method="POST" onsubmit="return confirm('ডিলিট করবেন?')">
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
    {{ $messages->links('pagination::bootstrap-4') }}
</div>
@endsection
