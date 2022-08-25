<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{asset('assets\css\student.css')}}">
        <link rel="stylesheet" href="styles.css">
        <title>Student</title>
    </head>
    <body>
        <form action='submit'method='post'>
            @csrf
            <div class="container register">
                            <div class="row">
                                <div class="col-md-3 register-left">
                                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                                    <h3>Welcome</h3>
                                    <p>Try one of our free online education form templates today!</p>
                                    <input type="submit" name="" value="Login"/><br/>
                                </div>
                                <div class="col-md-9 register-right">
                                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <h3 class="register-heading">Student Data Form</h3>
                                            <div class="row register-form">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" id='fname'class="form-control" name="firstname"placeholder='Enter First Name' required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id='lastname'name="lastname"placeholder='Enter Last Name'required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"id="CNIC" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X"  name="cnic" required="" >
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="date" id='birthday' class="form-control"name="birthday"placeholder='Enter Date of Brith'required>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="number"id='age' class="form-control"name="age"placeholder='Enter Your age'required>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="maxl">
                                                            <label class="radio inline">
                                                                <input type="radio" id="Male" name="gender" value="male" checked>
                                                                <span> Male </span>
                                                            </label>
                                                            <label class="radio inline">
                                                                <input type="radio" id="Female" name="gender" value="female">
                                                                <span>Female </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <button type="submit"  class="btnRegister" value="Submit">Submit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </form>
    </body>
</html>
