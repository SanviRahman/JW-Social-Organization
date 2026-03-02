<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    <style>
    * {
        box-sizing: border-box
    }

    body {
        margin: 0;
        background: #0b0f19;
        color: #e5e7eb;
        font-family: 'Segoe UI', 'Hind Siliguri', sans-serif
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px
    }

    header {
        background: #0f172a;
        border-bottom: 1px solid rgba(255, 255, 255, .06)
    }

    .nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 0
    }

    .nav a {
        color: #cbd5e1;
        text-decoration: none;
        margin-right: 14px
    }

    .nav a:hover {
        color: #10b981
    }

    .brand {
        color: #fff;
        font-weight: 700
    }

    .grid {
        display: grid;
        grid-template-columns: 220px 1fr;
        gap: 24px;
        margin-top: 24px
    }

    aside {
        background: #111827;
        border: 1px solid rgba(255, 255, 255, .06);
        border-radius: 12px;
        padding: 16px;
        position: sticky;
        top: 16px;
        height: fit-content
    }

    aside a {
        display: block;
        padding: 10px 12px;
        border-radius: 8px;
        color: #cbd5e1;
        text-decoration: none;
        margin-bottom: 6px
    }

    aside a:hover,
    aside a.active {
        background: #0f172a;
        color: #10b981
    }

    main {
        background: #111827;
        border: 1px solid rgba(255, 255, 255, .06);
        border-radius: 12px;
        padding: 20px
    }

    h1 {
        margin: 0 0 12px 0
    }

    table {
        width: 100%;
        border-collapse: collapse
    }

    th,
    td {
        padding: 10px;
        border-bottom: 1px solid rgba(255, 255, 255, .06);
        text-align: left
    }

    .btn {
        display: inline-block;
        padding: 10px 14px;
        background:  #0e835c;
        color:white;
        border: 2px solid #fff;
        border-radius: 40px;
        text-decoration: none;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s
    }

    .btn:hover {
        background: #ef4444;
        color: #fff;
        border-color: #ef4444
    }

    .btn-danger {
        background: #fff;
        color: #000;
        border-color: #fff
    }

    .btn-danger:hover {
        background: #ef4444;
        color: #fff;
        border-color: #ef4444
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px
    }

    label {
        display: block;
        margin-bottom: 6px;
        color: #e5e7eb
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #334155;
        background: #0f172a;
        color: #fff
    }

    .actions {
        display: flex;
        gap: 8px;
        flex-wrap: wrap
    }

    .alert {
        padding: 12px 14px;
        border-radius: 10px;
        margin-bottom: 14px
    }

    .alert-success {
        background: #052e1a;
        border: 1px solid #064e3b;
        color: #10b981
    }

    .alert-error {
        background: #3f1d1d;
        border: 1px solid #7f1d1d;
        color: #fca5a5
    }

    .top-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px
    }

    .muted {
        color: #9ca3af
    }

    .badge {
        display: inline-block;
        background: #f59e0b;
        color: #0b0f19;
        padding: 4px 10px;
        border-radius: 999px;
        font-weight: 700
    }

    .pagination {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
        margin-top: 12px
    }

    .pagination a {
        color: #cbd5e1;
        text-decoration: none;
        padding: 6px 10px;
        border: 1px solid rgba(255, 255, 255, .1);
        border-radius: 6px
    }

    .pagination .active {
        background: #10b981;
        border-color: #10b981;
        color: #0b0f19
    }
    </style>
</head>

<body>
    <header>
        <div class="container nav">
            <div class="brand">অ্যাডমিন</div>
            <nav>
                <a href="{{ route('admin.dashboard') }}">ড্যাশবোর্ড</a>
                <a href="{{ route('admin.events.index') }}">ইভেন্ট</a>
                <a href="{{ route('admin.karjokroms.index') }}">কার্যক্রম</a>
                @if(session('is_admin')===true)
                <form action="{{ route('admin.logout') }}" method="POST" style="display:inline">
                    @csrf
                    <button type="submit" class="btn" style="margin-left:10px">লগআউট</button>
                </form>
                @endif
            </nav>
        </div>
    </header>
    <div class="container grid">
        <aside>
            <a href="{{ route('admin.dashboard') }}"
                class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">ড্যাশবোর্ড</a>
            <a href="{{ route('admin.events.index') }}"
                class="{{ request()->routeIs('admin.events.*') ? 'active' : '' }}">ইভেন্ট</a>
            <a href="{{ route('admin.karjokroms.index') }}"
                class="{{ request()->routeIs('admin.karjokroms.*') ? 'active' : '' }}">কার্যক্রম</a>
            <a href="{{ route('admin.blogs.index') }}"
                class="{{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">ব্লগ</a>
            <a href="{{ route('admin.newsletters.index') }}"
                class="{{ request()->routeIs('admin.newsletters.*') ? 'active' : '' }}">নিউজলেটার</a>
            <a href="{{ route('admin.nibondon.index') }}"
                class="{{ request()->routeIs('admin.nibondon.*') ? 'active' : '' }}">নিবন্ধন</a>
            <a href="{{ route('admin.communications.index') }}"
                class="{{ request()->routeIs('admin.communications.*') ? 'active' : '' }}">যোগাযোগ</a>
        </aside>
        <main>
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if($errors->any())
            <div class="alert alert-error">দয়া করে ফর্মের ভুলগুলো ঠিক করুন</div>
            @endif
            @yield('content')
        </main>
    </div>
</body>

</html>