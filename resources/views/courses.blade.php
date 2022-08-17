<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>courses</title>
</head>
<body>
<form action="submit-course" method="post">
    @csrf
    <label for="course_code">course Code</label><br>
    <input type="number" id='course_code' name="course_code"placeholder='Enter course Code' required><br>
    <label for="course_title">Course Title</label><br>
    <input type="text" id='course_title' name="course_title"placeholder='Enter Course Title' required><br>
    <label for="credit_hours">Credit Hours</label><br>
    <input type="number" id='credit_hours' name="credit_hours"placeholder='Enter Credit Hours' required><br>
    <button type="submit" value="Submit">Submit
</form>
</body>
</html>
