<html>
<head>
    <title>

    </title>
</head>
<body>
<form action="{{ url('store') }}" method="post">
    @csrf
{{--    <?php echo "Php Core"; ?>--}}
{{--    {{ "Laravel" }}--}}

    <input type="text" name="student_name" id="student_name" placeholder="Enter student name">
    <input type="text" name="student_marks" id="student_marks" placeholder="Enter student marks">
    <input type="submit" value="Submit">
</form>
</body>
</html>
