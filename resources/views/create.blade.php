<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
    <h2>Add Book</h2>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
      @endif
        <form method="post" action="{{ route('store') }}">
                @csrf
                <div class="form-group">              
                    <label for="name">Author ID</label>
                    <input type="text" class="form-control" name="author_id"/>
                </div>
                <div class="form-group">
                    <label for="name">Title:</label>
                    <input type="text" class="form-control" name="title"/>       
                </div>
                <div class="form-group">
                    <label for="name">Year:</label>
                    <input type="text" class="form-control" name="year"/>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
        </form>
</body>
</html>