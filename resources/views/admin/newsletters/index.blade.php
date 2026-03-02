@extends('admin.layout')
@section('title','নিউজলেটার')
@section('content')
<div class="top-actions">
    <h1>নিউজলেটার সাবস্ক্রাইবার</h1>
    <div class="muted">মোট {{ $newsletters->total() }} জন</div>
</div>
<table>
    <thead>
        <tr>
            <th>ইমেইল</th>
            <th>তারিখ</th>
            <th>অ্যাকশন</th>
        </tr>
    </thead>
    <tbody>
        @foreach($newsletters as $n)
        <tr>
            <td>{{ $n->email }}</td>
            <td>{{ $n->created_at->format('d M Y') }}</td>
            <td class="actions">
                <form action="{{ route('admin.newsletters.destroy',$n) }}" method="POST" onsubmit="return confirm('ডিলিট করবেন?')">
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
    {{ $newsletters->links() }}
</div>
@endsection
