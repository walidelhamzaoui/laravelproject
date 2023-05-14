<!DOCTYPE html>
    <html>
    <head>
    <title>Page Title</title>
    </head>
    <body>

    <h1>student update</h1>

    <form action="{{ route('student.update',$student->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name='name'> <br><br>
        <input type="number" name='age'> <br><br>
        <button type="submit">submit</button>
    </form>

    </body>
    </html>
