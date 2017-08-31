@extends('main') @section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <form method="POST" action="/register">
                {{csrf_field()}}
                                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label for="inputConfirmPass">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password_confirmation">
                </div>
                                <div class="form-group">
                    <label for="inputPhone">Phone</label>
                    <input type="text" class="form-control" placeholder="Enter phone number" name="phone">
                </div>
                                <div class="form-group">
                    <label for="inputBirthdate">Birthdate</label>
                    <input type="text" class="form-control" placeholder="Enter birthdate" name="birthdate">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="agreement" value="yes">
                        I'm agree..
                    </label>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection