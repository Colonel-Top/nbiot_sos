@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-12 text-center animated pulse">

                <h5 class="COLFont font16 ">"Device Management"</h5>

                <h5 class="COLFont font16 hardgolden-font">-----------<i class="fas fa-spa"></i>-----------
                </h5>
            </div>

        </div>
        <br>
        <br>
        <div class="container-fluid">


            <div class="card">
                <div class="card-header">
                    <h3 class="dancing-script">Total Devices {{App\Device::all()->count()}}</h3>
                </div>
                <div class="card-body">
                    <label for="search">Search Available on: <br>Device name, latitude, Longtitude,device_id,
                        Description</label>
                    <br>
                    <input type="text" class="form-controller" id="search" name="search" style="width: 80%;">


                </div>
            </div>
            <hr>
            <div class="row">

                @if(Auth::role != "admin")
                    <div class="col-md-4 text-center">


                        <div class="card">
                            <div class="card-header">
                                <div class="panel-heading"><b>Add New Device</b></div>
                            </div>
                            <div class="card-body text-left">
                                <form method="POST" action="{{ route('device.add') }}" enctype='multipart/form-data'>
                                    <label for="name">Device Name*</label>
                                    @csrf
                                    <input class="form-control" id="name" name="name" type="text"
                                           placeholder="Device Name" required>
                                    <br>
                                    <label for="device_id">Device ID*</label>
                                    <input class="form-control" id="device_id" name="device_id" type="number"
                                           placeholder="Device ID" required>

                                    <br>
                                    <label for="device_lat">Device Latitude*</label>
                                    <input class="form-control" id="device_lat" name="device_lat" type="text"
                                           placeholder="Device Latitude Number" required>

                                    <br>
                                    <label for="device_long">Device Longtitude*</label>
                                    <input class="form-control" id="device_long" name="device_long" type="text"
                                           placeholder="Device Longtitude Number" required>

                                    <br>
                                    <label for="description">Device Description</label>
                                    <input class="form-control" id="description" name="description" type="text"
                                           placeholder="Device Description">

                                    <br>


                                    <label for="image1">Image 1 /
                                        (Max 20MB) </label>
                                    <div class="col-md-6">
                                        <input type="file" id="image1" name="image1"
                                               accept="image/*">

                                        @if ($errors->has('profile_pic'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profile_pic') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <br>


                                    <label for="image2"
                                    >Image 2 /
                                        (Max 20MB) </label>
                                    <div class="col-md-6">
                                        <input type="file" id="image2" name="image2"
                                               accept="image/*">

                                        @if ($errors->has('image2'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image2') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <br>


                                    <label for="image3"
                                    >Image 3 /
                                        (Max 20MB) </label>
                                    <div class="col-md-6">
                                        <input type="file" id="image3" name="image3"
                                               accept="image/*">

                                        @if ($errors->has('image3'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image3') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-basic form-control">Add Device
                                    </button>
                                </form>
                            </div>
                        </div>


                    </div>
                @endif
                @if(Auth::role != "admin")
                    <div class="col-md-12">
                        @else
                            <div class="col-md-8">
                                @endif
                                <div class="card">
                                    <div class="card-header">Device List</div>
                                    <div class="card-body">
                                        <div class="row" id="livedata">

                                            @include('device.search')

                                            {{--@foreach($users as $user)--}}

                                            {{--<div class="col-lg-5">--}}
                                            {{--<div class="media COLFONT">--}}
                                            {{--<a class="pull-left" href="{{$user->user_type == "general" ? route('admin.user.edit',$user->id) : route('admin.user.edittse',$user->id)}}">--}}
                                            {{--<img class="media-object dp2 img-circle" src="{{secure_asset($user->profile_pic)}}"--}}
                                            {{--style="width: 100px;height:100px;">--}}
                                            {{--</a>--}}
                                            {{--<div class="media-body padme">--}}
                                            {{--<h4 class="media-heading">--}}
                                            {{--<a href="{{$user->user_type == "general" ? route('admin.user.edit',$user->id) : route('admin.user.edittse',$user->id)}}">      {{$user->gender == "male" ? "Mr." : "Ms."}}--}}
                                            {{--{{($user->name)}} &nbsp; {{($user->lastname)}}</a>--}}

                                            {{--</h4>--}}
                                            {{--<h5>{{$user->user_type == "general" ? "General User" : ($user->user_type == "tse_student" ? "TSE Student":"TSE Personnel")}}</h5>--}}
                                            {{--<hr style="margin:8px auto">--}}
                                            {{--<span class="label label-default">{{($user->roles)}}</span>--}}
                                            {{--@if(!is_null($user->student_id))--}}
                                            {{--<span class="label label-default">{{$user->student_id}}</span>--}}

                                            {{--<span class="label label-default">{{$user->branch_engr}}</span>--}}
                                            {{--<span class="label label-info">&nbsp;Graduate(d):&nbsp;{{$user->graduate_year}}</span>--}}
                                            {{--@endif--}}


                                            {{--</div>--}}
                                            {{--</div>--}}

                                            {{--</div>--}}

                                            {{--@endforeach--}}

                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row justify-content-center" id="defart">
                                            {{ $devices->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="col-md-4">--}}
                            {{--<h3 class="dancing-script">Available Categories</h3>--}}
                            {{--<br>--}}
                            {{--<div class="card">--}}

                            {{--<div class="card-body COLFont" style="height:310px;">--}}
                            {{--@foreach(\App\Category::all() as $cat)--}}
                            {{--<p>{{$cat->name}}: &nbsp;{{$cat->products()->count()}} Products</p>--}}
                            {{--@endforeach--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                    </div>

                    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>--}}


            </div>
        </div>
        <script type="application/javascript">

            $('#search').on('keyup', function () {

                $value = $(this).val();
                console.log($value);
                $.ajax({

                    type: 'POST',

                    url: '{{URL::to('/user/device/search')}}',

                    data: {'search': $value, _token: "{{csrf_token()}}"},

                    success: function (data) {
                        // console.log(data);
                        $('#livedata').html(data);
                        if ($value === "") {
                            $("#defart").show();
                            console.log("Hiding");
                        } else {
                            $("#defart").hide();
                            console.log("Showing");
                        }
                    }

                });


            });

        </script>
@endsection
