@extends('layouts.app2')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Horizontal Form -->
                <div class="col-md-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add User</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{route('createUser')}}">
                        {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">name</label>
                                    <div class="col-sm-8">
                                        <input type="name" class="form-control" id="name" placeholder="name" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-4 col-form-label">Role</label>
                                    <div class="col-sm-8">
                                        
                                        <select class="form-control" name="role" id="role">
                                            <option  hidden>Select Any role</option>
                                            @foreach ($roles as $role)
                                                <option value="{{$role->role}}">{{$role->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="confirm_password" class="col-sm-4 col-form-label">confirm Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="confirm_password" placeholder="confirm Password" name="password_confirmation">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-8">
                                        <div class="form-check">
                                        {{-- <input type="checkbox" class="form-check-input" id="exampleCheck3"> --}}
                                        {{-- <label class="form-check-label" for="exampleCheck3">Remember me</label> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Sign in</button>
                                <button type="reset" class="btn btn-default float-right">Cancel</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                    
                </div>

                


                
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection