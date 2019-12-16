<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>
        @endif
            <a href="{{ route('create') }}" class="btn btn-primary btn-sm">Create new Book</a>        
		<table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>                            
                            <th>Author Name</th>
                            <th>Year</th>
                            <th>Delete</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->title}}</td>
                                <td>{{$book->author->name}}</td>
                                <td>{{$book->year}}</td>
                                <td>
                                    <form action="{{ route('helloka',$book->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>                   
                            </tr>
                        @endforeach
                    </tbody>
                </table>      
	</div>
</body>
</html>