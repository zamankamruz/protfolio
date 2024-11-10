@extends('admin.master')

<style>

.container {
    max-width: 100px;
    margin: 0 auto;
    background-color: #f9f9f9;
    border-radius: 10px;
}

.section-title, .section-subtitle {
    color: #333;
    font-weight: bold;
    text-align: left;
    margin-bottom: 20px;
}

.form-container {
    background-color: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 12px 15px;
    font-size: 14px;
    color: #555;
    background-color: #f3f3f3;
    transition: border-color 0.3s, background-color 0.3s;
}

.form-control::placeholder {
    color: #999;
    font-weight: 500;
}

.form-control:focus {
    border-color: #007bff;
    background-color: #fff;
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.1);
}

textarea.form-control {
    resize: vertical;
}

.btn-custom {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 25px;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-custom:hover {
    background-color: #0056b3;
}







.experience-list {
    position: relative; /* Changed from absolute to relative for better flow */
    width: 100%; /* Set to 100% to use the full width of the container */
    max-width: 900px; /* Keep the max-width for larger screens */
    margin: auto; /* Center the container */
    display: flex;
    flex-direction: column;
    gap: 15px;
    padding: 20px; /* Added padding for better spacing */
}

.experience-item {
    background-color: #ffffff;
    padding: 15px 20px;
    border-radius: 8px;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s, transform 0.2s;
}

.experience-item:hover {
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
    transform: translateY(-2px);
}

.experience-header {
    display: flex;
    flex-direction: column; /* Change to column for better stacking */
    gap: 10px;
}

.edit-form {
    display: flex;
    flex-direction: column; /* Stack form elements */
    gap: 10px; /* Space between inputs */
}

.experience-header input[type="text"],
.experience-header input[type="date"],
.experience-header input[type="number"],
.experience-header textarea {
    width: 100%; /* Use full width */
    height: 40px; /* Increase height for better usability */
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 8px; /* Increased padding for better touch targets */
    font-size: 14px;
    color: #333;
    background-color: #f9f9f9;
    transition: border-color 0.3s;
}

textarea {
    resize: none; /* Disable resizing */
    height: 120px; /* Increased height for better usability */
}

.button-container {
    display: flex; /* Use flexbox for layout */
    gap: 10px; /* Space between buttons */
}

button.btn-update,
button.btn-delete {
    width: 50%; /* Set buttons to 50% width */
    font-size: 14px; /* Ensure font size is readable */
    border-radius: 5px;
    height: 40px;
    cursor: pointer;
    transition: background-color 0.3s, box-shadow 0.2s;
    padding: 10px; /* Ensure padding for touch targets */
}

button.btn-update {
    background-color: #28a745;
    color: #ffffff;
    border: none;
}

button.btn-update:hover {
    background-color: #218838;
    box-shadow: 0px 3px 6px rgba(0, 128, 0, 0.2);
}

button.btn-delete {
    background-color: #e74c3c;
    color: #ffffff;
    border: none;
}

button.btn-delete:hover {
    background-color: #c0392b;
    box-shadow: 0px 3px 6px rgba(255, 0, 0, 0.2);
}

.description{
    height: 120px !important;
}



/* Responsive styles */
@media (max-width: 600px) {
    .experience-list {
        width: 100%; /* Full width on smaller screens */
        padding: 10px; /* Reduce padding */
    }

    .experience-header {
        flex-direction: column; /* Stack items in a column */
    }

    .experience-header input,
    .experience-header textarea {
        width: 100%; /* Full width for inputs */
    }

    button.btn-update,
    button.btn-delete {
        width: 100%; /* Full width buttons */
    }
}


</style>

@section('contant')
<div class="container mt-4">
    <h2 class="section-title">Manage Experiences</h2>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Add New Experience Form -->
    <div class="form-container">
            <form action="{{ route('experiences.store') }}" method="POST">

            @csrf

            <label for="Title">Title</label>
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
            <label for="Title">Company</label>
            <div class="form-group">
                <input type="text" name="company" class="form-control" placeholder="Company" required>
            </div>
            <label for="Title">Start Date</label>
            <div class="form-group">
                <input type="date" name="start_date" class="form-control" placeholder="Start Date" required>
            </div>
            <label for="Title">End Date (optional)</label>
            <div class="form-group">
                <input type="date" name="end_date" class="form-control" placeholder="End Date (optional)">
            </div>
            <label for="Title">Years of Experience</label>
            <div class="form-group">
                <input type="number" name="years_experience" class="form-control" placeholder="Years of Experience" required>
            </div>
            <label for="Title">Description</label>
            <div class="form-group">
                <textarea name="description" class="form-control" placeholder="Description" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-custom mt-3">Add Experience</button>
        </form>

    </div>

    <hr class="my-4">

    <h3 class="section-subtitle">Exiscting Experienes</h3>

</div>

<div class="experience-list">
    @foreach($experiences as $experience)
        <div class="experience-item">
            <div class="experience-header">
                <!-- Inline Edit Form -->
                <form action="{{ route('experiences.update', $experience->id) }}" method="POST" class="edit-form">
                    @csrf
                    @method('PUT')
                    <input type="text" name="title" value="{{ $experience->title }}" required placeholder="Title">
                    <input type="text" name="company" value="{{ $experience->company }}" required placeholder="Company">
                    <input type="date" name="start_date" value="{{ $experience->start_date->format('Y-m-d') }}" required>
                    <input type="date" name="end_date" value="{{ optional($experience->end_date)->format('Y-m-d') }}" placeholder="End Date">
                    <input type="number" name="years_experience" value="{{ $experience->years_experience }}" required min="0" placeholder="Years">
                    <textarea class="description" name="description" required placeholder="Description">{{ $experience->description }}</textarea>
                    
                    <!-- Button Container -->
                    <div class="button-container">
                        <button type="submit" class="btn btn-update">Update</button>
                        <!-- Delete Form -->
                        <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this experience?')">Delete</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
</div>

@endsection
