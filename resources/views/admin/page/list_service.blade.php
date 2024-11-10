@extends('admin.master')

@section('contant')

<style>
    /* Card Styling */
    .card {
        border-radius: 6px;
        background-color: #ffffff;
    }

    .card-header {
        font-weight: 600;
        font-size: 1.2rem;
    }

    /* Table Styling */
    .table {
        font-size: 0.95rem;
    }

    .table th, .table td {
        padding: 12px;
        vertical-align: middle;
    }

    /* Input and Textarea Styling */
    .form-control {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 8px;
        background-color: #f8f9fa;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #0d6efd;
        background-color: #fff;
    }

    /* Button Styling */
    .btnupdate {
        width: 60px;
        height: 30px;
        margin-left: 5px;
        background-color: green;
        color: white;
        border-radius: 4px;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .btndelete {
        width: 60px;
        height: 30px;
        margin-left: 5px;
        background-color: tomato;
        color: black;
        border-radius: 4px;
        font-weight: 500;
        font-size: 0.9rem;
    }



    .btn-outline-primary:hover {
        background-color: #0d6efd;
        color: #fff;
    }



    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: #fff;
    }

    /* Responsive Table for Smaller Screens */
    @media (max-width: 768px) {
        .table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
        .btn {
            width: 100%;
            margin-bottom: 8px;
            
        }

        /* Stack buttons vertically on smaller screens */
        .d-flex.flex-column {
            flex-direction: column !important;
        }

        /* Margin adjustments for smaller screens */
        .mb-2 {
            margin-bottom: 0.5rem !important;
        }


    }
</style>

<div class="container mt-5">
    <div class="card border-light shadow-sm">
        <div class="card-header bg-dark text-white text-center">
            <h4 class="mb-0">Service Management</h4>
        </div>
        <div class="card-body">
            <table class="table table-borderless align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Icon</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <form action="{{ route('services.update', $service->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <td>
                                    <input type="text" name="title" class="form-control" 
                                           value="{{ $service->title }}" required>
                                </td>
                                <td>
                                    <input type="text" name="icon_class" class="form-control" 
                                           value="{{ $service->icon_class }}">
                                </td>
                                <td>
                                    <textarea name="description" class="form-control" required>{{ $service->description }}</textarea>
                                </td>
                                <td class="d-flex flex-column flex-md-row">
                                    <button type="submit" id="update"  class="btnupdate btn-outline-primary btn-sm mb-2 mb-md-0 me-md-2">Update</button>
                            </form>
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this service?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btndelete btn-outline-danger btn-sm">Delete</button>
                            </form>
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
