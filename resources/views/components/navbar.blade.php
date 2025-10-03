<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<nav style="background:#fff; color:#f43ba4; padding:16px 24px; border-radius:10px 10px 0 0; display:flex; align-items:center; justify-content:space-between; margin-bottom:24px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-bottom: 3px solid #f43ba4;">
    <style>
        .nav-link {
            color: #f550aeff;
            margin-right: 18px;
            text-decoration: none;
            transition: font-weight 0.3s, color 0.3s;
            font-weight: 500;
            font-family: 'Poppins', sans-serif; 
        }
        .nav-link:last-child {
            margin-right: 0;
        }
        .nav-link:hover, .nav-link.active {
            font-weight: 600;
            color: #e30382ff;
        }
    </style>
    <div style="font-weight:bold; font-size:1.4rem; font-family: 'Poppins', sans-serif;">
        Praktikum Web Lanjut
    </div>
    <div>
        <a href="{{ route('welcome') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ route('user.create') }}" class="nav-link {{ Request::is('user/create') ? 'active' : '' }}">Create</a>
        <a href="{{ route('user.store') }}" class="nav-link {{ Request::is('user') ? 'active' : '' }}">User</a>
    </div>
</nav>
