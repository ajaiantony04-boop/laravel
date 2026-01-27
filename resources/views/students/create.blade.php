@extends('layouts.app')

@section('content')

<style>
    .form-container {
        max-width: 450px;
        margin: 50px auto;
        padding: 25px;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group input:focus {
        outline: none;
        border-color: #007bff;
    }

    .btn-submit {
        width: 100%;
        padding: 10px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background: #0056b3;
    }
</style>

<div class="form-container">
    <h2>Add Student</h2>

    <form action="{{ route('student.add-student') }}" method="POST">
        @csrf

        <div class="form-group">
            <input type="text" name="name" placeholder="Enter name" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Enter email" required>
        </div>

        <div class="form-group">
            <input type="text" name="role" placeholder="Enter role" required>
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Enter password" required>
        </div>

        <button type="submit" class="btn-submit">Save Student</button>
    </form>
</div>

@endsection
