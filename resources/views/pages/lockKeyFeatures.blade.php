<?php
/**
 * Created by PhpStorm.
 * User: Sohel Rana
 * Date: 29-Feb-20
 * Time: 5:36 AM
 */
?>
@extends('layouts.app2')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach ($companies as $item)
                    {{-- {{ $item->name }} --}}
                    <?php
                        $name =  $item->name ;    
                    ?>
                    <div class="col-md-3 col-sm-6 row_gap">
                        <div class="row txt_center">
                            <div class="col-sm-12">
                                <a href="{{route('certificates',[$name])}}">
                                    <img class="logo_img" src="https://www.w3schools.com/howto/img_avatar.png" alt="logo" style="width:200px">
                                </a>
                            </div>
                        </div>
                        <div class="row txt_center">
                            <div class="col-sm-12">
                                
                                <a href="{{route('certificates',[$name])}}"><span class="company_name">{{ $name }}</span></a>
                            </div>
                        </div>
                        {{--<img class="logo_img" src="{{asset('/assets/images/logos')}}/placeholder.png" alt="logo" style="width:200px">--}}
                    </div>
                @endforeach

                </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
