@extends('admin.master')

@section('contant')


<style>
     form {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
        }

        /* Form Elements */
        form div {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            display: block;
            font-size: 0.9rem;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 0.95rem;
            transition: border-color 0.3s ease;
            background-color: #f8f9fa;
        }

        /* Input Focus Styling */
        input[type="text"]:focus,
        textarea:focus,
        input[type="file"]:focus {
            outline: none;
            border-color: #3498db;
            background-color: #fff;
        }

        /* Textarea Styling */
        textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Button Styling */
        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #2980b9;
        }

        /* File Input Styling */
        input[type="file"] {
            padding: 6px;
        }
</style>

@if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<form action="{{ route('home-section.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $homeSection->title) }}">
    </div>

    <div>
        <label>Subtitle</label>
        <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $homeSection->subtitle) }}">
    </div>

    <div>
        <label>Description</label>
        <textarea name="description" class="form-control">{{ old('description', $homeSection->description) }}</textarea>
    </div>

    <div>
        <label>Profile Image</label>
        <input type="file" name="profile_image" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Save Changes</button>
</form>




    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.transition = 'opacity 0.5s ease';
                successMessage.style.opacity = '0';
                setTimeout(() => {
                    successMessage.remove();
                }, 500); // Delay to allow fade-out effect
            }, 3000); // 3 seconds delay before fade-out starts
        }
    });
</script>
@endsection


