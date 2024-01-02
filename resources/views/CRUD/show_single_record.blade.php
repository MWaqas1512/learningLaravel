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
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ isset($item->student_name) ? $item->student_name : '' }}</td>
                <td>{{ isset($item->student_marks) ? $item->student_marks : '' }}</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
