@extends('Registration.layout')
@section('form')
    <form action="/reg_form/registration" id="reg_form">
        <div class="col">
            <h4>Registration Form</h4>
        </div>
        <div class="row-justify-content-center email">
            <label for="inputEmail" class="p-1">Your Email</label>
            <input type="email" name="email" class="form-control input-sm" id="regInputEmail" placeholder="Enter email">
        </div>
        @if($errors->has('email'))
            <div class="alert alert-danger">
                <ul style="list-style: none; text-align: center">
                    @foreach ($errors->get('email') as $error)
                        <li style="margin-right: 30px">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row-justify-content-center password">
            <label for="inputPassword" class="p-1">Your Password</label>
            <input type="password" name="password" class="form-control input-sm" id="regInputPassword"
                   placeholder="Enter password">
            @if($errors->has('password'))
                <div class="alert alert-danger" style="margin-top: 20px;">
                    <ul style="list-style: none; text-align: center">
                        @foreach ($errors->get('password') as $error)
                            <li style="margin-right: 30px">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row-justify-content-center p-3" id="submitButton">
            <input class="btn btn-primary" id="button" type="submit" name="action" value="Registration">
        </div>
    </form>
@endsection

