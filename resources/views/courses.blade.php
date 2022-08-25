<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{asset('assets\css\course.css')}}">
        <title>courses</title>
    </head>
    <body>
        <form action="submit-course" method="post">
            @csrf
            <div class="container contact">
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact-info">
                            <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                            <h2>Course Registration Form</h2>
                            <h4>We would love to hear from you !</h4>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="contact-form">
                            <div class="form-group">
                            <label class="control-label col-sm-2" for="fname">Course Code:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id='course_code' name="course_code"placeholder='Enter course Code' required>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-sm-2" for="lname">Course Title:</label>
                            <div class="col-sm-10">
                                <input type="text" id='course_title'  class="form-control"name="course_title"placeholder='Enter Course Title' required>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Credit Hours:</label>
                            <div class="col-sm-10">
                                <input type="number" id='credit_hours'class="form-control" name="credit_hours"placeholder='Enter Credit Hours' required><br>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default"value="Submit">Submit</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
