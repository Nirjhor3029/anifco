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
            <center><h3>Company-{{$logo}} Testimonial</h3></center>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Local</h5>

                            <p class="card-text">
                                Click the link below to get all Local Testimonial
                            </p>

                            <a href="{{ route('testimonialListAsPerCompany', [$logo,'Local']) }}" class="card-link">Local Testimonial</a>
                            <a href="#" class="card-link"></a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Global</h5>

                            <p class="card-text">
                                Click the link below to get all Global Testimonial
                            </p>

                            <a href="{{ route('testimonialListAsPerCompany', [$logo,'Global']) }}" class="card-link">Global Testimonial</a>
                            <a href="#" class="card-link"></a>
                        </div>
                    </div>

                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection


