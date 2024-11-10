@extends('admin.master')

@section('contant')

<style>
    /* Form container */
.modern-form {
    max-width: 1000px;

    padding: 25px;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.12);
    font-family: 'Roboto', sans-serif;
    transition: all 0.3s ease;
}

/* Labels */
.form-group label {
    display: block;
    font-weight: 500;
    margin-bottom: 8px;
    color: #333333;
}

/* Input fields styling */
.form-group input[type="text"],
.form-group textarea {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #cccccc;
    border-radius: 8px;
    outline: none;
    font-size: 16px;
    background-color: #f9f9f9;
    transition: all 0.3s ease;
}

/* Focus styling for inputs */
.form-group input[type="text"]:focus,
.form-group textarea:focus {
    border-color: #007bff;
    box-shadow: 0px 0px 8px rgba(0, 123, 255, 0.3);
    background-color: #ffffff;
}

/* Textarea styling */
.form-group textarea {
    min-height: 120px;
    resize: vertical;
}

/* File input */
.form-control-file {
    padding: 8px;
    font-size: 15px;
    color: #555;
    border: 1px solid #cccccc;
    border-radius: 6px;
    background-color: #f9f9f9;
    transition: all 0.3s ease;
}

.form-control-file:hover {
    border-color: #007bff;
}

/* Submit button with gradient */
.submit-btn {
    display: inline-block;
    width: 100%;
    padding: 12px 0;
    background: linear-gradient(135deg, #007bff, #0056b3);
    color: #ffffff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    text-align: center;
    transition: background 0.3s ease, box-shadow 0.3s ease;
}

.submit-btn:hover {
    background: linear-gradient(135deg, #0056b3, #004080);
    box-shadow: 0px 4px 12px rgba(0, 86, 179, 0.4);
}

/* Responsive design */
@media (max-width: 600px) {
    .modern-form {
        padding: 20px;
    }
    .submit-btn {
        padding: 10px 0;
    }
}

</style>


@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data" class="modern-form">
    @csrf
    @method('PUT')


    <label for="title">Title</label>
    <div class="form-group">
        
        <input type="text" id="title" name="title" class="form-control" value="{{$about->title}}">
    </div>

    <label for="description">Description</label>
    <div class="form-group">
        
        <textarea id="description" name="description"   class="form-control">{{$about->description}}</textarea>
    </div>
    <label for="image">Profile Image</label>

    <div class="form-group">
        
        <input type="file" id="image" name="image" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
</form>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            let alert = document.querySelector('.alert');
            if (alert) {
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 500); // Removes after fade out
            }
        }, 3000); // 3 seconds
    });
</script>



@endsection