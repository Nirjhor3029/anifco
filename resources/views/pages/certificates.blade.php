<?php
/**
 * Created by PhpStorm.
 * User: Sohel Rana
 * Date: 29-Feb-20
 * Time: 5:33 AM
 */
?>

@extends('layouts.app2')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <center><h3>Company-{{$logo}} Certificates</h3></center>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CE</h5>

                            <p class="card-text">
                                This is a certificate
                            </p>

                            <a href="#" class="card-link">Download Link</a>
                            <a href="#" class="card-link"></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">FDA</h5>

                            <p class="card-text">
                                This is a certificate
                            </p>

                            <a href="#" class="card-link">Download Link</a>
                            <a href="#" class="card-link"></a>
                        </div>
                    </div>

                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ISO</h5>

                            <p class="card-text">
                                This is a certificate
                            </p>

                            <a href="#" class="card-link">Download Link</a>
                            <a href="#" class="card-link"></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">EC</h5>

                            <p class="card-text">
                                This is a certificate
                            </p>

                            <a href="#" class="card-link">Download Link</a>
                            <a href="#" class="card-link"></a>
                        </div>
                    </div>

                    <!-- /.card -->
                </div>

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection


