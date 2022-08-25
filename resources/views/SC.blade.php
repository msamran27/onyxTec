
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('assets\css\sc.css')}}">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

        <title>Student</title>
    </head>
    <body>
        <form>
            @csrf


            <section id="contact">
                    <div class="section-content">
                        <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Student & Course Data</span></h1>
                        <h3>Fields Required From institutions in All Student & Course Title</h3>
                    </div>
                    <div class="contact-section">
                    <div class="container">
                        <form>
                            <div class="col-md-6 form-line">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id='fname' name="firstname"placeholder='Enter First Name' required>
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" id='lastname'name="lastname"placeholder='Enter Last Name'required>
                                </div>
                                <div class="form-group">
                                    <label for="CNIC">CNIC No.</label>
                                    <input type="text" class="form-control" id="CNIC" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X"  name="cnic" required="" >
                                </div>
                                <div class="form-group">
                                    <label for="birthday">Date Of Birth</label>
                                    <input type="date"class="form-control" id='birthday' class='birthday'name="birthday"placeholder='Enter Date of Brith'required>
                                </div>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" id='age'name="age"placeholder='Enter Your age'required>
                                </div>
                                <div class="form-group">
                                    <label for="Gender">Gender</label>
                                    <select name="gender" class="form-control"id='gender'>
                                        <option value="none" selected></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for ="course_code">Course Code</label>
                                    <input type="number" class="form-control" id='course_code' name="course_code"placeholder='Enter course Code' required>
                                </div>
                                <div class="form-group">
                                    <label for ="credit_hours">Credit Hours</label>
                                    <input type="number" class="form-control" id='credit_hours' name="credit_hours"placeholder='Enter Credit Hours' required>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group"> <label>Courses</label>
                                        <select class="form-control select2 select2-hidden-accessible" id="course_title" multiple="multiple" data-placeholder="Select Courses" style="width: 200%;" tabindex="-1" aria-hidden="true" name='course_title'>
                                            <option value=""></option>
                                            @foreach (\App\Models\course:: get() as $courses)
                                                <option value="{{$courses->id}}">{{ $courses->course_title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                <div>
                                    <button type="button" class="btn btn-default submit" onclick="submitForm()" value="Submit">Submit</button>
                                 </div>
                            </div>
                        </form>
                    </div>
                </section>
        </form>
    </body>
<script>



function submitForm() {
    let form_data = new FormData();

    let first_name = $('#fname').val();
    form_data.append('firstname', first_name);

    let lastname = $('#lastname').val();
    form_data.append('lastname', lastname);

    let CNIC = $('#CNIC').val();
    form_data.append('cnic', CNIC);

    let birthday = $('#birthday').val();
    form_data.append('birthday', birthday);

    let age = $('#age').val();
    form_data.append('age', age);

    let gender = $('#gender').val();
    form_data.append('gender', gender);

    let course_code = $('#course_code').val();
    form_data.append('course_code', course_code);

    let credit_hours = $('#credit_hours').val();
    form_data.append('credit_hours', credit_hours);

    let course_title = $('#course_title').val();
    form_data.append('course_title', course_title);

    console.log(form_data);

    $.ajax({
        url: '{{ url('submitCourse') }}',
        headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        processData: false,
        contentType: false,
        cache: false,
        data: form_data,
        success: (response) => {
            alert('data saved');
        },
        error: (error) => {
            alert('Error')
        }

    });


}

$(document).ready(function() {
    $('.select2').select2({
        closeOnSelect: false
    });
});

    </script>
</html>


