<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>                            
                            <th>Author Name</th>
                            <th>Year</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($author->books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->title}}</td>
                                <td>{{$book->author->name}}</td>
                                <td>{{$book->year}}</td>                     
                            </tr>
                        @endforeach
                    </tbody>
                </table>     
    </table>	
</body>
</html>