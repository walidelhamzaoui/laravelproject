<!DOCTYPE html>
    <html>
    <head>
    <title>Page Title</title>
    </head>
    <body>

    <h1>student insertion</h1>

    <form action={{ route('student.store') }} method="post">
        @csrf
        <input type="text" name='name'> <br><br>
        <input type="number" name='age'> <br><br>
        <button type="submit">submit</button>
    </form>

    </body>
    </html>
