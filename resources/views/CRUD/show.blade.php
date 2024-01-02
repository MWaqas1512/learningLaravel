<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learning Laravel CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>Student records</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Student name</th>
            <th>Student marks</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
{{--        @foreach($variable_coming_from_controller as $fetch_single_Record_from_data_coming_from_controller)--}}
        @foreach($students as $student)
            <tr>
                <td>{{ isset($student->student_name) ? $student->student_name : '' }}</td>
                <td>{{ isset($student->student_marks) ? $student->student_marks : '' }}</td>
                <td><a href="{{ url('edit/'.$student->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ url('delete/'.$student->id) }}" class="btn btn-danger">Delete</a>    {{-- student->id is the primary key of student table --}}
                    <a href="{{ url('show/'.$student->id) }}">Show</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
