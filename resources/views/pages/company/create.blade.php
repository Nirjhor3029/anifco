@extends('layouts.app2')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Add Form -->
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

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif



                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add Company</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{route('createCompany')}}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Company name <span class="required_star">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" placeholder=" company name" name="name" value="{{ old('name') }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Company name <span class="required_star">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept="image/*" id="exampleInputFile" name="image" onchange="loadFile(event)" required>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label">Image Preview: </label>
                                    <div class="col-sm-8">
                                        <img class="preview_image" id="output" src="https://www.dubaiautodrome.com/wp-content/uploads/2016/08/placeholder.png" alt="">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Add user</button>
                                <button type="reset" class="btn btn-default float-right">Cancel</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                    
                </div>





                @if(isset($update_user))
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

                        @if(session()->has('update_message'))
                            <div class="alert alert-success">
                                {{ session()->get('update_message') }}
                            </div>
                        @endif


                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Update User</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="POST" action="{{route('updateUser',$update_user->id)}}">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">name <span class="required_star">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{ $update_user->name }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label">Email <span class="required_star">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $update_user->email }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="password" placeholder="Password" name="password"  >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="confirm_password" class="col-sm-4 col-form-label">confirm Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="confirm_password" placeholder="confirm Password" name="password_confirmation" >
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
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{route('User')}}" class="btn btn-default float-right">Cancel</a>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                @endif
                <!-- Update Form -->





            </div>

            <div class="row">
                
                <div class="col-sm-12">
                    @if(session()->has('remove_message'))
                        <div class="alert alert-danger">
                            {{ session()->get('remove_message') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">User-Table with default information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="user_table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($companies as $index => $company)

                                <tr class="colored_row">
                                    <td>{{$index+1}}</td>
                                    <td>{{$company->name}}</td>

                                    <td>
                                        <div class="row" style="text-align: center">
                                            <div class="col-sm-6">
                                                <a href="{{route('manageUser',$company->id)}}">
                                                    <i class="fa fa-edit" style="font-size:24px"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="{{route('removeUser',$company->id)}}" onclick="return deleteAlert()">
                                                    <i style="font-size:24px;color:red" class="fa">&#xf00d;</i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        
    </div>
@endsection