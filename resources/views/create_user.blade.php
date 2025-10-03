@extends('layouts.app')

@section('content')

<x-navbar />

<style>
    body {
        background: #f7f7f7;
    }
    .form-card {
        max-width: 400px;
        margin: 40px auto;
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        padding: 32px 28px 24px 28px;
        box-sizing: border-box;
    }
    .form-card form {
        margin: 0;
    }
    .form-card h1 {
        text-align: center;
        color: #f43ba4;
        margin-bottom: 28px;
        font-size: 1.7rem;
    }
    label {
        display: block;
        margin-bottom: 6px;
        color: #333;
        font-weight: 500;
    }
    input[type="text"], select {
        width: 100%;
        box-sizing: border-box;
        padding: 10px 12px;
        border: 1px solid #e0e0e0;
        border-radius: 7px;
        margin-bottom: 18px;
        font-size: 1rem;
        background: #fafafa;
        transition: border 0.2s;
    }
    input[type="text"]:focus, select:focus {
        border-color: #f43ba4;
        outline: none;
    }
    button[type="submit"] {
        width: 100%;
        padding: 12px;
        background: #f43ba4;
        color: #fff;
        border: none;
        border-radius: 7px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.2s;
    }
    button[type="submit"]:hover {
        background: #d12b7c;
    }
</style>

<div class="form-card">
  <h1>Untuk Pengguna Baru</h1>
  <form action="{{ route('user.store') }}" method="POST">
    @csrf

    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" required>

    <label for="npm">NPM</label>
    <input type="text" id="npm" name="npm" required>

    <label for="kelas">Kelas</label>
    <select name="kelas_id" id="kelas_id" required>
        @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
        @endforeach
    </select>

    <button type="submit">Submit</button>
  </form>
</div>

<x-footer />

@endsection