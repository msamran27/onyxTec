<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Student</title>
    </head>
    <body>
    <form action='submitCourse'method='post'>
        @csrf
        <label for="fname">First Name</label><br>
        <input type="text" id='fname' name="firstname"placeholder='Enter First Name' required><br>
        <label for="lastname">Last Name</label><br>
        <input type="text" id='lastname'name="lastname"placeholder='Enter Last Name'required><br>
        <label for="CNIC">CNIC</label><br>
        <input type="text" id="CNIC" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X"  name="cnic" required="" ><br>
        <label for="birthday">Birthday</label><br>
        <input type="date" id='birthday' class='birthday'name="birthday"placeholder='Enter Date of Brith'required><br>
        <label for="age">Age</label><br>
        <input type="number"id='age'name="age"placeholder='Enter Your age'required><br>
        Gender<br>
        <select name="gender" class="gender">
            <option value="none" selected></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>

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
<style>
    .birthday{
        width:175px !important;
        height: 19px !important;
    }
    .gender{
     width:175px !important;
     height: 21px !important;
    }
 </style>
