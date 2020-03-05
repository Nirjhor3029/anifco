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
        <center><h3>Company-{{$logo}} {{$local_global}}-Testimonial</h3></center>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>No.</th>
                              <th>Testimonial</th>
                              <th>Other information(s)</th>
                              <th>Action</th>
                              
                            </tr>
                            </thead>
                            <tbody>

                                @for ($i = 0; $i < 10; $i++)
                                <tr>
                                    <td>{{$i+1}}.</td>
                                    <td>Testimonial no {{$i+1}}
                                    </td>
                                    <td>lorem ipsum</td>
                                    <td> 
                                        <a href="#">View</a> |
                                        <a href="#">Download</a>
                                    </td>
                                  </tr>
                                @endfor
                            
                            
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Testimonial</th>
                                <th>Other information(s)</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>

                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <script>
            $(function () {
              $("#example1").DataTable();
              $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
              });
            });
          </script>
    </div>
@endsection


