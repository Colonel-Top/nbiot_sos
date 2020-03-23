@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-12 text-center animated pulse">

                <h5 class="COLFont font16 ">"Device Information"</h5>
                {{--                <h5 class="COLFont font16 ">"Device Information"</h5>--}}

                <h5 class="COLFont font16 hardgolden-font">-----------<i class="fas fa-spa"></i>-----------
                </h5>
            </div>

        </div>
        <br>
        <br>

        <div class="container-fluid ">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">
                    <section name="map">
                        <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openlinkmap.org/small.php?lat={{$device->device_lat}}&lon={{$device->device_long}}&zoom=18&type=node" style="border: 1px solid black"></iframe>
                    </section>
                    <hr>
                </div>
                <div class="col-md-4">
                    @if($device->image1 != null)
                        <div class="card">
                            <div class="card-header">Image Scenario of AED 1</div>
                            <div class="card-body">
                                <div class="container-fluid">

                                    <img src="  {{asset($device->image1)}}" style="width:100%; max-height: 200px;">
                                    <br> <br>
                                    <a class="btn btn-outline-success form-control" target="_blank"
                                       href="{{ URL::to(asset("$device->image1")) }}"
                                    >
                                        <i class="fas fa-ban"></i> See Original
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endif
                </div>
                <div class="col-md-4">
                    @if($device->image2 != null)
                        <div class="card">
                            <div class="card-header">Image Scenario of AED 2</div>
                            <div class="card-body">
                                <div class="container-fluid">

                                    <img src="  {{asset($device->image2)}}" style="width:100%; max-height: 200px;">
                                    <br> <br>
                                    <a class="btn  btn-outline-success  form-control" target="_blank"
                                       href="{{ URL::to(asset("$device->image1")) }}"
                                    >
                                        <i class="fas fa-ban"></i> See Original
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endif
                </div>
                <div class="col-md-4">
                    @if($device->image3 != null)
                        <div class="card">
                            <div class="card-header">Image Scenario of AED 3</div>
                            <div class="card-body">
                                <div class="container-fluid">

                                    <img src="  {{asset($device->image3)}}" style="width:100%; max-height: 200px;">
                                    <br> <br>
                                    <a class="btn  btn-outline-success  form-control" target="_blank"
                                       href="{{ URL::to(asset("$device->image3")) }}"
                                    >
                                        <i class="fas fa-ban"></i> See Original
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                {{--                <div class="col-md-6">--}}
                {{--                    <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0"--}}
                {{--                            marginwidth="0"--}}
                {{--                            src="https://www.openstreetmap.org/export/embed.html?bbox=460.61147332191473%2C14.072772438190396%2C460.6159526109696%2C14.075176405295588&amp;layer=mapnik&amp;marker={{$device->device_lat}}%2C{{$device->device_long}}"--}}
                {{--                            style="border: 1px solid black"></iframe>--}}
                {{--                </div>--}}


            </div>
            <div class="row">

                <div class="col-md-8">


                    <div class="card">
                        <div class="card-header">
                            <div class="panel-heading"><b>Show Device</b></div>
                        </div>
                        <div class="card-body text-left">
                            <div class="container">
                                <label for="name">Device Name</label>
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$device->id}}">
                                <input class="form-control" id="name" name="name" type="text"
                                       placeholder="Device Name" required value="{{$device->name}}" disabled>
                                <br>
                                <label for="device_id">Device ID</label>
                                <input class="form-control" id="device_id" name="device_id" type="number"
                                       placeholder="Device ID" required value="{{$device->device_id}}" disabled>

                                <br>
                                <label for="device_lat">Device Latitude</label>
                                <input class="form-control" id="device_lat" name="device_lat" type="text"
                                       placeholder="Device Latitude Number" required value="{{$device->device_lat}}"
                                       disabled>

                                <br>
                                <label for="device_long">Device Longtitude</label>
                                <input class="form-control" id="device_long" name="device_long" type="text"
                                       placeholder="Device Longtitude Number" required value="{{$device->device_long}}"
                                       disabled>

                                <br>
                                <label for="description">Device Description</label>
                                <input class="form-control" id="description" name="description" type="text"
                                       placeholder="Device Description" value="{{$device->decription}}" disabled>

                                <br>


                            </div>

                            <hr>

                            <br/>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="row container">
                        <div class="col-md-12 text-center">
                            <a href="https://www.google.com/maps?q={{$device->device_lat}} , {{$device->device_long}}"
                               class="btn btn-basic form-control">See on Google Maps</a>
                        </div>
                        <div class="col-md-12 text-center">
                            <a href="{{ url()->previous() }}" class="btn btn-basic form-control">Back</a>
                        </div>

                        <div class="col-md-12 text-center">
                            <hr>
                            @if(Auth::check() and Auth::user()->role =="admin")

                                <a  class="btn btn-basic form-control"
                                    style="color:darkblue; border-color: darkblue;"
                                    href="{{route('device.show.edit',$device->id)}}">
                                    Edit device
                                </a>

                            @endif
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>--}}


        </div>
    </div>

@endsection
