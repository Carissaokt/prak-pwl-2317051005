@extends('layouts.app')

@section('content')

<x-navbar />

<style>
    body {
        background: #f7f7f7;
    }
    .user-table-container {
        max-width: 700px;
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
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
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
</style>

<x-user_table :users="$users" />

<x-footer />

@endsection