@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row logo-area">
            <div class="col-md-5">
                <a href="guest.html"><img src="{{ asset ('img/book-trade-logo.jpg') }}" height="60px" class="img img-responsive"></a>
            </div>
            <div class="col-md-5 offset-md-1">
                <form action="search_results.html">
                    <div class="row">                    
                        <div class="col-md-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="search" placeholder="Search ISBN...">
                            </div>                        
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-default btn-block"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>  
                    </div>         
                </form>
            </div>
        </div>
        <div class="row body-content">
            <div class="col-md-8 offset-md-2">
                <div class="edit-account-page">
                    <div class="card edit-account-card">
                        <div class="card-header">
                            <h3>Edit Your Details</h3>
                        </div>
                        <div class="card-body">
                            <br>
                            {!! Form::open(['action' => ['AccountsController@update',$account->id], 'method' => 'POST']) !!}
                                <div class="form-group row">
                                    <label for="username" class="col-sm-2 offset-sm-1 col-form-label"><span class="important_text">*</span>Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $account->name ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="login_email" class="col-sm-2 offset-sm-1 col-form-label"><span class="important_text">*</span>Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php echo $account->email ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="login_password" class="col-sm-2 offset-sm-1 col-form-label"><span class="important_text">*</span>Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="first_name" class="col-sm-2 offset-sm-1 col-form-label">First Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name (optional)" value="<?php echo $account->first_name ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="last_name" class="col-sm-2 offset-sm-1 col-form-label">Last Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name (optional)" value="<?php echo $account->last_name ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="campus" class="col-sm-2 offset-sm-1 col-form-label"><span class="important_text">*</span>Location</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="location" id="location">
                                            <option selected disabled>--Select Campus--</option>
                                            <option>Tempe</option>
                                            <option>Polytechnic</option>
                                            <option>West Campus</option>
                                            <option>Downtown Phoenix</option>
                                        </select>
                                    </div>
                                </div>                                
                                <div class="form-group row">
                                    <div class="col-sm-8 offset-sm-3">
                                        <p align="center" class="important_text">*required</p>
                                    </div>
                                </div>
                                {{Form::hidden('_method', 'PUT')}}                                
                                <div class="form-group row">
                                    <div class="col-sm-8 offset-sm-3">
                                        <button type="submit" class="btn btn-block btn-primary">Update</button>
                                    </div>
                                </div>   
                            {!! Form::close() !!}                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection