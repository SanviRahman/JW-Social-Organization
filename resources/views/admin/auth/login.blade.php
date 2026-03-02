<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>অ্যাডমিন লগইন</title>
    <style>
    * {
        box-sizing: border-box
    }

    body {
        margin: 0;
        background: #0b0f19;
        color: #e5e7eb;
        font-family: 'Segoe UI', 'Hind Siliguri', sans-serif;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px
    }

    .card {
        width: 100%;
        max-width: 420px;
        background: #111827;
        border: 1px solid rgba(255, 255, 255, .08);
        border-radius: 16px;
        box-shadow: 0 20px 50px -12px rgba(0, 0, 0, .6);
        overflow: hidden
    }

    .header {
        padding: 24px 28px;
        background: #0f172a;
        border-bottom: 1px solid rgba(255, 255, 255, .06)
    }

    .title {
        margin: 0;
        font-size: 1.4rem
    }

    .body {
        padding: 24px 28px
    }

    label {
        display: block;
        margin-bottom: 6px
    }

    input {
        width: 100%;
        padding: 12px 14px;
        border-radius: 10px;
        border: 1px solid #334155;
        background: #0f172a;
        color: #fff
    }

    .row {
        display: flex;
        flex-direction: column;
        gap: 14px
    }

    .btn {
        width: 100%;
        margin-top: 16px;
        padding: 12px 16px;
        border-radius: 999px;
        border: 2px solid #10b981;
        background: transparent;
        color: #fff;
        font-weight: 700;
        cursor: pointer
    }

    .btn:hover {
        background: #10b981
    }

    .alert {
        background: #3f1d1d;
        border: 1px solid #7f1d1d;
        color: #fca5a5;
        padding: 12px 14px;
        border-radius: 12px;
        margin-bottom: 12px
    }

    .muted {
        color: #9ca3af;
        font-size: .9rem;
        margin-top: 8px
    }
    </style>
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="card">
        <div class="header">
            <h1 class="title">অ্যাডমিন লগইন</h1>
        </div>
        <div class="body">
            @if($errors->any())
            <div class="alert">ভুল ইউজারনেম বা পাসওয়ার্ড</div>
            @endif
            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="row">
                    <div>
                        <label>ইউজারনেম</label>
                        <input type="text" name="username" value="{{ old('username') }}" required autofocus>
                    </div>
                    <div>
                        <label>পাসওয়ার্ড</label>
                        <input type="password" name="password" required>
                    </div>
                </div>
                <button class="btn" type="submit">লগইন</button>
                <div class="muted">ডিফল্ট .env ভ্যালু: ADMIN_USER এবং ADMIN_PASSWORD</div>
            </form>
        </div>
    </div>
</body>

</html>