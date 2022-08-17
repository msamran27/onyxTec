<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
<form action='submit'method='post'>
    @csrf
    <label for="fname">First Name</label><br>
    <input type="text" id='fname' name="firstname"placeholder='Enter First Name' required><br>
    <label for="lastname">Last Name</label><br>
    <input type="text" id='lastname'name="lastname"placeholder='Enter Last Name'required><br>
    <label for="CNIC">CNIC</label><br>
    <input type="text" id="CNIC" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X"  name="cnic" required="" ><br>
    <label for="birthday">Birthday</label><br>
    <input type="date" id='birthday'name="birthday"placeholder='Enter Date of Brith'required><br>
    <label for="age">Age</label><br>
    <input type="number"id='age'name="age"placeholder='Enter Your age'required><br>
    Gender<br>
    <input type="radio" id="Male" name="gender" value="male">
    <label for="Male">Male</label><br>
    <input type="radio" id="Female" name="gender" value="female">
    <label for="Female">Female</label><br>
    <button type="submit" value="Submit">Submit
</form>
</body>
</html>
