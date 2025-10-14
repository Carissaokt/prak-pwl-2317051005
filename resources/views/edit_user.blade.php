@extends('layouts.app')

@section('content')

<x-navbar />

@if($errors->any())
    <div style="background:#ffeaea;color:#c9002b;padding:12px 20px;border-radius:8px;margin:20px auto;max-width:600px;text-align:center;font-weight:600;">
        {{ implode(', ', $errors->all()) }}
    </div>
@endif

<style>
    body {
        background: #f7f7f7;
    }
    .form-card {
        max-width: 400px;
        margin: 60px auto;
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        padding: 32px 28px 24px 28px;
        box-sizing: border-box;
    }
    .form-card h1 {
        text-align: center;
        color: #f1287fff;
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
        border-color: #a56dff;
        outline: none;
    }
    button[type="submit"] {
        width: 100%;
        padding: 12px;
        background: #f43da2ff;
        color: #fff;
        border: none;
        border-radius: 7px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.2s;
    }
    button[type="submit"]:hover {
        background: #cc095dff;
    }
</style>

<div class="form-card">
  <h1>Edit Pengguna</h1>
  <form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" value="{{ $user->nama }}" required>

    <label for="npm">NPM</label>
    <input type="text" id="npm" name="npm" value="{{ $user->npm }}" required>

    <label for="kelas">Kelas</label>
    <select name="kelas_id" id="kelas_id" required>
        @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}" @if($kelasItem->id == $user->kelas_id) selected @endif>{{ $kelasItem->nama_kelas }}</option>
        @endforeach
    </select>

    <button type="submit">Update</button>
  </form>
</div>

<x-footer />

@endsection