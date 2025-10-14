@extends('layouts.app')

@section('content')

<x-navbar />

@if(Session::has('success'))
    <div class="popup-success">
        <div class="popup-icon">✔</div>
        <div class="popup-message">{{ Session::get('success') }}</div>
    </div>

    <script>
        // Otomatis hilang setelah 3 detik
        setTimeout(() => {
            document.querySelector('.popup-success')?.classList.add('fade-out');
        }, 3000);
    </script>


<style>
    body {
        background: #f7f7f7;
    }
    .user-table-container {
        max-width: 900px;
        margin: 40px auto;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        padding: 32px 24px;
    }
    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 32px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 0 auto;
    }
    th, td {
        padding: 12px 16px;
        text-align: center;
    }
    th {
        background: #f43ba4;
        color: #fff;
        font-weight: bold;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    tr:nth-child(even) {
        background: #f9f9f9;
    }
    tr:hover {
        background: #ffe3f3;
    }
    td {
        color: #444;
    }
     .aksi-group {
        display: flex;
        gap: 10px;
        justify-content: center;
    }
    .btn-edit {
        background: #2196f3; 
        color: #fff;
        border: none;
        border-radius: 50px;
        padding: 7px 22px;
        font-size: 1rem;
        font-weight: bold;
        box-shadow: 0 2px 8px rgba(33,150,243,0.15);
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
        text-decoration: none;
        letter-spacing: 1px;
    }
    .btn-edit:hover {
        transform: scale(1.08) rotate(-2deg);
        box-shadow: 0 4px 16px #2196f355;
        background: #1565c0;
    }
    .btn-delete {
        background: #f44336; 
        color: #fff;
        border: none;
        border-radius: 50px;
        padding: 7px 22px;
        font-size: 1rem;
        font-weight: bold;
        box-shadow: 0 2px 8px rgba(33,150,243,0.15);
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
        text-decoration: none;
        letter-spacing: 1px;
    }
    .btn-delete:hover {
        transform: scale(1.08) rotate(2deg);
        box-shadow: 0 4px 16px #f4433655;
        background: #b71c1c;
    }
    form {
        display: inline;
    }
    .popup-success {
            position: fixed;
            top: 30px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #4ade80, #38b767ff);
            color: #fff;
            padding: 16px 26px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            box-shadow: 0 4px 20px rgba(22, 163, 74, 0.4);
            animation: popupSlide 0.5s ease-out;
            z-index: 9999;
        }
        .popup-icon {
            background: #fff;
            color: #16a34a;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 50%;
            width: 28px;
            height: 28px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 6px rgba(255,255,255,0.4);
        }
        .popup-message {
            letter-spacing: 0.5px;
        }
        @keyframes popupSlide {
            from {
                opacity: 0;
                transform: translate(-50%, -20px);
            }
            to {
                opacity: 1;
                transform: translate(-50%, 0);
            }
        }
        .fade-out {
            animation: fadeOut 0.6s forwards;
        }
        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: translate(-50%, -20px);
            }
        }
</style>
@endif

<x-user_table :users="$users" />

<x-footer />

@endsection