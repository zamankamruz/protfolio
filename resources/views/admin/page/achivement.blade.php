@extends('admin.master')

<style>

    .Achievement{
        display: flex;
        margin-bottom: 50px;
    }

    .achievementcard{
        padding: 10px;
        width: 400px;
        height: 420px;
        margin-right: 20px;
        background-color: #d7d7d7;
        border-radius: 5px;

    }


    .addachivement{
        padding: 10px;
        width: 400px;
        height: 420px;

        background-color: #d7d7d7;
        border-radius: 5px;
    }



    .containerlist {
    font-family: Arial, sans-serif;
}

.table {
    width: 100%;
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden;
}

.table-header th {
    background-color: #f8f9fa;
    color: #333;
    font-weight: bold;
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #eaeaea;
}

.table-row td {
    padding: 12px;
    vertical-align: middle;
    text-align: center;
    border-bottom: 1px solid #f1f1f1;
}

.table-row:hover {
    background-color: #f9f9f9;
    transition: background-color 0.3s ease;
}

.form-input {
    border: 1px solid #ced4da;
    border-radius: 4px;
    padding: 6px;
    width: 100%;
    box-shadow: none;
}

.btn-primary {
    background-color: #4CAF50;
    border: none;
    padding: 6px 12px;
    color: #fff;
    font-weight: 500;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #45a049;
}

.btn-danger {
    background-color: #f44336;
    border: none;
    padding: 6px 12px;
    color: #fff;
    font-weight: 500;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-danger:hover {
    background-color: #d32f2f;
}

</style>


@section('contant')


        <div class="Achievement">
            <div class="achievementcard">
                <h2 class="text-center mt-4">Edit Achievement Section</h2>

                @if (session('success'))
                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                @endif

                <form action="{{ route('admin.achievements.update', $achievement->id) }}" method="POST" class="p-4">
                    @csrf
                    @method('PUT')
                    
                    <label for="title" class="form-label">Title</label>

                   
                        <input type="text" name="title" class="form-control form-control-lg" value="{{ $achievement->title }}" required>
            
        
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control form-control-lg" rows="4" required>{{ $achievement->description }}</textarea>
         

          
                        <button type="submit" class="btn btn-primary btn-lg">Update Achievement</button>
        
                </form>
            </div>

            <div class="addachivement">


                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <h4>Add New Counter</h4>
                <form action="{{ route('admin.counters.store') }}" method="POST" class="mb-4">
                    @csrf
                
                        <label for="icon_path">Icon Path</label>
                        <input type="text" name="icon_path" class="form-control" placeholder="e.g., images/counter/heart.png">
                  
               
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="e.g., Happy Clients" required>
                
                  
                        <label for="value">Value</label>
                        <input type="number" name="value" class="form-control" placeholder="e.g., 800" required>

                       <button type="submit" class="btn btn-primary">Add Counter</button>

                </form>

                </div>


        </div>

        <div class="containerlist my-4">
            <h4 class="mb-4">Existing Counters</h4>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-hover shadow-sm rounded">
                <thead class="table-header">
                    <tr>
                        <th>Icon Path</th>
                        <th>Title</th>
                        <th>Value</th>
                        <th>Upload</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($counters as $counter)
                        <tr class="table-row">
                            <!-- Icon Path -->
                            <td>
                                <form action="{{ route('admin.counters.update', $counter->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" name="icon_path" class="form-control form-input" value="{{ $counter->icon_path }}" required>
                            </td>

                            <!-- Title -->
                            <td>
                                    <input type="text" name="title" class="form-control form-input" value="{{ $counter->title }}" required>
                            </td>

                            <!-- Value -->
                            <td>
                                    <input type="number" name="value" class="form-control form-input" value="{{ $counter->value }}" required>
                            </td>

                            <!-- Update Button -->
                            <td>
                                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                </form>
                            </td>

                            <!-- Delete Button -->
                            <td>
                                <form action="{{ route('admin.counters.destroy', $counter->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this counter?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>




@endsection
