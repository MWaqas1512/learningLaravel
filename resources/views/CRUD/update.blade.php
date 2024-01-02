<html>
<head>
    <title>

    </title>
</head>
<body>
<form action="{{ url('update') }}" method="post">
    @csrf
{{--    <?php echo "Php Core"; ?>--}}
{{--    {{ "Laravel" }}--}}
    <input type="hidden" name="item_id" value="{{ $id }}">
    <input type="text" name="student_name" id="student_name" value="{{ isset($item->student_name) ? $item->student_name : '' }}" placeholder="Enter student name">
    <input type="text" name="student_marks" id="student_marks" value="{{ isset($item->student_marks) ? $item->student_marks : '' }}"  placeholder="Enter student marks">
    <input type="submit" value="Submit">
</form>
</body>
</html>
