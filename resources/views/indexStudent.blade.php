<!DOCTYPE html>
    <html>
    <head>
    <title>Page Title</title>
    </head>
    <body>

    <h1>All Students</h1>

    <table>
        <tr>
            <th>name</th>
            <th>age</th>
            <th>actions</th>
        </tr>
        @foreach ($students as $student )
        <tr>
            <td>{{ $student->name }} </td>
            <td>{{ $student->age }} </td>
            <td><a href={{ route('student.edit',$student) }}><button>edit</button></a></td>
            <td><a href={{ route('student.destroy',$student) }}><button>delete</button></a></td>
        </tr>
        @endforeach
    </table>

    </body>
    </html>
