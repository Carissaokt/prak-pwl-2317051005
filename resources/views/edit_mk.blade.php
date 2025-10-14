@extends('layouts.app')

@section('content')

<style>
    body {
        min-height: 100vh;
        width: 100%;
        position: relative;
        margin: 0;
        font-family: 'Poppins', Georgia, 'Times New Roman', Times, serif;
    }
    .aurora-bg {
        position: fixed;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        background:
            radial-gradient(ellipse 85% 65% at 8% 8%, rgba(175, 109, 255, 0.42), transparent 60%),
            radial-gradient(ellipse 75% 60% at 75% 35%, rgba(255, 235, 170, 0.55), transparent 62%),
            radial-gradient(ellipse 70% 60% at 15% 80%, rgba(255, 100, 180, 0.40), transparent 62%),
            radial-gradient(ellipse 70% 60% at 92% 92%, rgba(120, 190, 255, 0.45), transparent 62%),
            linear-gradient(180deg, #f7eaff 0%, #fde2ea 100%);
    }
    .mk-form-card {
        max-width: 400px;
        margin: 60px auto;
        background: rgba(255,255,255,0.95);
        border-radius: 16px;
        box-shadow: 0 4px 16px rgba(175, 109, 255, 0.12);
        padding: 36px 28px 28px 28px;
        position: relative;
        z-index: 1;
    }
    .mk-form-card h1 {
        text-align: center;
        color: #a56dff;
        margin-bottom: 28px;
        font-size: 1.5rem;
        font-weight: bold;
        letter-spacing: 1px;
    }
    label {
        display: block;
        margin-bottom: 8px;
        color: #a56dff;
        font-weight: 500;
        font-size: 1rem;
    }
    input[type="text"], input[type="number"] {
        width: 100%;
        box-sizing: border-box;
        padding: 10px 12px;
        border: 1px solid #e0e0e0;
        border-radius: 7px;
        margin-bottom: 18px;
        font-size: 1rem;
        background: #fafafa;
        transition: border 0.2s;
        display: block;
    }
    input[type="text"]:focus, input[type="number"]:focus {
        border-color: #a56dff;
        outline: none;
    }
    .btn-primary {
        width: 100%;
        padding: 12px;
        background: linear-gradient(90deg, #a56dff 60%, #ff64b4 100%);
        color: #fff;
        border: none;
        border-radius: 7px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.2s;
        margin-top: 8px;
        box-shadow: 0 2px 8px rgba(175, 109, 255, 0.10);
    }
    .btn-primary:hover {
        background: linear-gradient(90deg, #ff64b4 60%, #a56dff 100%);
    }
</style>


<div class="aurora-bg"></div>

<div class="mk-form-card">
    <h1>Edit Mata Kuliah</h1>
    <form action="{{ route('mk.update', $mk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_mk">Nama Mata Kuliah</label>
        <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required>

        <label for="sks">SKS</label>
        <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" required min="1" max="8">

        <button type="submit" class="btn-primary">Update</button>
    </form>
</div>

@endsection