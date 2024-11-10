@extends('admin.master')

<style>

.education-container {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 10px;
    width: 850px;
    height: 500px;
    margin-bottom: 5px;
    margin: 0 auto; /* Center the form horizontally */
    
}

.education-container h3 {
    font-size: 1.3rem;
    color: #333;
    margin-bottom: 15px;
    text-align: center;
    font-weight: 600;
}

.education-form label {
    display: block;
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 5px;
}

.education-form .form-group {
    
}

.education-form input[type="text"],
.education-form input[type="number"],
.education-form textarea {
    width: 100%;
    height: 40px; /* Set height for input fields */
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 0.9rem;
    background-color: #f5f5f5;
    transition: border-color 0.3s;
}

.education-form input[type="text"]:focus,
.education-form input[type="number"]:focus,
.education-form textarea:focus {
    border-color: #007bff;
    outline: none;
}

.education-form textarea {
    resize: vertical;
    min-height: 70px;
}

.submit-btn {
    width: 20%;
    padding: 12px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    font-weight: bold;
    color: #fff;
    background-color: #28a745;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #218838;
}










.table-container {
    max-width: 100%;
    overflow-x: auto;
    padding: 10px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.styled-table {
    width: 100%;
    

    font-size: 0.9rem;
    text-align: left;
    color: #333;
}


.styled-table th {

    padding: 12px 3px;
    border-bottom: 1px solid #e0e0e0;
    vertical-align: middle;
}

.styled-table td {
    padding: 12px 3px;
    margin-top: 5px;
    border-bottom: 1px solid #e0e0e0;
  
}

.styled-table td input{
    border: 1px solid #555;
    height: 50px;
}


.styled-table thead th {
    background-color: #007bff;
    color: #ffffff;
    font-weight: bold;
    text-transform: uppercase;
}

.styled-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.styled-table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Flex container for inline buttons */
.action-buttons {
    display: flex;
 
}

/* Button styling */
.styled-table .btn {
    width: 30px;
    height: 30px;
    border: none;
    border-radius: 5px;
    font-size: 0.9rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.styled-table .btn-primary {
    background-color: #28a745;
    color: #ffffff;
}

.styled-table .btn-primary:hover {
    background-color: #218838;
}

.styled-table .btn-danger {
    background-color: #e74c3c;
    color: #ffffff;
}

.styled-table .btn-danger:hover {
    background-color: #c0392b;
}




</style>

@section('contant')

<div class="education-container">
    <h3>Add New Education</h3>
    <form action="{{ route('education.store') }}" method="POST" class="education-form">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Enter title" required>
        </div>
        
        <div class="form-group">
            <label for="start_year">Start Year</label>
            <input type="number" name="start_year" id="start_year" placeholder="Enter start year" required>
        </div>

        <div class="form-group">
            <label for="end_year">End Year</label>
            <input type="number" name="end_year" id="end_year" placeholder="Enter end year" required>
        </div>

        <div class="form-group">
            <label for="duration">Duration (in years)</label>
            <input type="number" name="duration" id="duration" placeholder="Enter duration" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Enter description" required></textarea>
        </div>
        
        <button type="submit" class="submit-btn">Add Education</button>
    </form>
</div>





<!-- Display all experiences -->
<div class="table-container">
<table class="styled-table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Start Year</th>
            <th>End Year</th>
            <th>Duration</th>
            <th>Description</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($educations as $education)
            <tr>
                <form action="{{ route('education.update', $education->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <td>
                        <input type="text" name="title" value="{{ $education->title }}" class="form-control" required>
                    </td>
                    <td>
                        <input type="text" name="start_year" value="{{ $education->start_year }}" class="form-control" required>
                    </td>
                    <td>
                        <input type="text" name="end_year" value="{{ $education->end_year }}" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="duration" value="{{ $education->duration }}" class="form-control" required>
                    </td>
                    <td>
                        <textarea name="description" class="form-control" required>{{ $education->description }}</textarea>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </td>
                </form>
                <td>
                    <form action="{{ route('education.destroy', $education->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>


@endsection