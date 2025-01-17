@extends('layouts.simple')
@section('main')
<h1> Login </h1>


{{ Form::open(array('route' => 'sessions.store', 'class'=>'form-signin')) }}
 {{ Form::text('email', $value = null, array('placeholder' => 'Email', 'class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
 {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required')) }}
 {{ Form::submit('Sign in', array('class' => 'btn btn-lg btn-primary btn-block')) }}
{{ Form::close() }}

@stop

<style>

// custom CSS of the Gmail style login form
.form-signin
{
max-width: 330px;
padding: 15px;
margin: 0 auto;
padding-top: 5px;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
margin-bottom: 10px;
}
.form-signin .checkbox
{
font-weight: normal;
}
.form-signin .form-control
{
position: relative;
font-size: 16px;
height: auto;
padding: 10px;
 -webkit-box-sizing: border-box;
 -moz-box-sizing: border-box;
box-sizing: border-box;
}
.form-signin .form-control:focus
{
z-index: 2;
}
.form-signin input[type="password"]
{
margin-bottom: 10px;
}
.account-wall
{
margin-top: 20px;
padding: 40px 0px 20px 0px;
background-color: #f7f7f7;
 -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
 -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
color: #555;
font-size: 18px;
font-weight: 400;
display: block;
}
.profile-img
{
width: 96px;
height: 96px;
margin: 0 auto 10px;
display: block;
 -moz-border-radius: 50%;
 -webkit-border-radius: 50%;
border-radius: 50%;
}
.profile-name {
font-size: 16px;
font-weight: bold;
text-align: center;
margin: 10px 0 0;
height: 1em;
}
.profile-email {
display: block;
padding: 0 8px;
font-size: 15px;
color: #404040;
line-height: 2;
font-size: 14px;
text-align: center;
overflow: hidden;
text-overflow: ellipsis;
white-space: nowrap;
 -moz-box-sizing: border-box;
 -webkit-box-sizing: border-box;
box-sizing: border-box;
}
.need-help
{
display: block;
margin-top: 10px;
}
.new-account
{
display: block;
margin-top: 10px;
}


</style>