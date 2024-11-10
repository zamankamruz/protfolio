@extends('admin.master')

@section('contant')

<style>
    /* Main Container */
    .skill-management-container {
        max-width: 1000px;

        padding: 15px;
        background: #f4f6f9;
        border-radius: 5px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        font-family: 'Arial', sans-serif;
    }

    /* Page Title */
    .page-title {
        font-size: 18px;
        font-weight: 700;
        color: #34495e;
        text-align: center;
        margin-bottom: 10px;
    }

    /* Section Titles */
    .section-title {
        font-size: 14px;
        font-weight: 600;
        color: #34495e;
        margin: 15px 0 8px;
    }

    /* Form Styling */
    .skill-form .form-group {
        margin-bottom: 10px;
    }

    .skill-form label {
        font-size: 12px;
        color: #576574;
        margin-bottom: 2px;
        display: block;
    }

    .form-control {
        width: 100%;
        padding: 6px;
        font-size: 13px;
        color: #34495e;
        background: #ffffff;
        border: 1px solid #ced6e0;
        border-radius: 4px;
        transition: border-color 0.2s;
    }

    /* Input Focus Effect */
    .form-control:focus {
        border-color: #1abc9c;
        box-shadow: 0 0 3px rgba(26, 188, 156, 0.15);
    }

    /* Button Styles */
    .btn-primary, .btn-success, .btn-danger {
        padding: 5px 10px;
        font-size: 12px;
        font-weight: 600;
        color: #ffffff;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.2s, box-shadow 0.2s;
        display: inline-block;
    }

    .btn-primary {
        background-color: #1abc9c;
        border: none;
    }

    .btn-primary:hover {
        background-color: #16a085;
        box-shadow: 0 2px 4px rgba(22, 160, 133, 0.3);
    }

    .btn-success {
        background-color: #2ecc71;
        border: none;
    }

    .btn-success:hover {
        background-color: #27ae60;
        box-shadow: 0 2px 4px rgba(46, 204, 113, 0.3);
    }

    .btn-danger {
        background-color: #e74c3c;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c0392b;
        box-shadow: 0 2px 4px rgba(231, 76, 60, 0.3);
    }

    /* Skills List Styling */
    .skill-list {
        margin-top: 10px;
    }

    .skill-item {
        display: flex;
        align-items: center;
        padding: 6px;
        margin-bottom: 6px;
        background-color: #ffffff;
        border: 1px solid #ced6e0;
        border-radius: 4px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    }

    .skill-item .form-control {
        margin-right: 5px;
    }

    .skill-item .btn-success {
        margin-right: 5px;
    }

    /* Extra Spacing for Skill Name Label */
    .nameskill {
        margin-top: 10px;
    }

</style>

<div class="skill-management-container">
    <h1 class="page-title">Manage Skills</h1>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add Skill Form -->
    <form action="{{ route('skills.store') }}" method="POST" class="skill-form">
        @csrf
        <div class="form-group">
            <label for="name" class="nameskill">Skill Name</label>
            <input type="text" id="name" name="name" placeholder="Skill name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="percentage">Skill Percentage</label>
            <input type="number" id="percentage" name="percentage" placeholder="Skill % (0-100)" class="form-control" required min="0" max="100">
        </div>
        <button type="submit" class="btn-primary">Add Skill</button>
    </form>

    <hr>

    <!-- Existing Skills List -->
    <h2 class="section-title">Existing Skills</h2>
    <div class="skill-list">
        @foreach ($skills as $skill)
        <div class="skill-item">
            <form action="{{ route('skills.update', $skill->id) }}" method="POST" class="d-flex align-items-center w-100">
                @csrf
                @method('PUT')
                <input type="text" name="name" value="{{ $skill->name }}" class="form-control" required>
                <input type="number" name="percentage" value="{{ $skill->percentage }}" class="form-control" required min="0" max="100">
                <button type="submit" class="btn-success">Update</button>
            </form>
            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-danger">Delete</button>
            </form>
        </div>
        @endforeach
    </div>
</div>

<!-- JavaScript to Hide the Success Message after 3 Seconds -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const alert = document.getElementById("success-alert");
        if (alert) {
            setTimeout(() => {
                alert.style.display = "none";
            }, 3000); // 3000 milliseconds = 3 seconds
        }
    });
</script>


@endsection