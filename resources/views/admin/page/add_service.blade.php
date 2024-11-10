@extends('admin.master')

<style>


.allsection{
    display: flex;
}

.aboutservice{
    width: 400px;
    height: 460px;
    padding: 20px;
    border-radius: 5px;
    background-color: #ffffff;
    margin: 10px;
}

.aboutservice input{
    width: 100%;
    height: 30px;
    border: none;
}


.textarea{
    width: 100%;
    height: 100px;
    margin-bottom: 8px;
    background-color: #efefef;
    padding: 5;
    border: none;
}


.newservice{
    width: 400px;
    height: 460px;
    padding: 20px;
    border-radius: 5px;
    background-color: #ffffff;
    margin: 10px;
}

.Description{
    width: 100%;
    height: 90px;
    margin-bottom: 10px;
    padding: 5px;
    background-color: #efefef;
    border: none;
}

.addservic{
    width: 120px;
    height: 40px;
    border-radius: 5px;
    background-color: royalblue;
    color: white;
    border: none;
}


</style>

@section('contant')


  @foreach ($sections as $section )

   <div class="allsection">
    
  

    <div class="aboutservice">

        <h1>About Services</h1>

        <form action="{{ route('admin.sections.update', $section->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title</label>
            <input  type="text" name="title"  value="{{ $section->title }}" required>
            <label for="subtitle">Subtitle</label>
            <input type="text"  name="subtitle" value="{{ $section->subtitle }}" class="form-control">
            <label for="description">Description</label>
            <textarea name="description" class="textarea"  required>{{ $section->description }}</textarea>
            <button type="submit" class="btn btn-primary">Updata</button>
        </form>

    </div>


    <div class="newservice">

        <h2>Add New Services</h2>

        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Title" required>
            <label for="title">Icon Class</label>
            <input type="text" name="icon_class" placeholder="Icon Class" required>
            <label for="title">Description</label><br>
            <textarea name="description" class="Description" placeholder="Description" required></textarea><br>
            <button type="submit" class="addservic" >Add Service</button>
        </form>

    </div>


    </div>

    @endforeach

@endsection