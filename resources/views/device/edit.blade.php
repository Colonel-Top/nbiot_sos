@extends('layouts.app')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<script>
    var mymap = L.map('mapid').setView([51.505, -0.09], 13);

</script>
@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-12 text-center animated pulse">

                <h5 class="COLFont font16 ">"Device Edit"</h5>

                <h5 class="COLFont font16 hardgolden-font">-----------<i class="fas fa-spa"></i>-----------
                </h5>
            </div>

        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="panel-heading"><b>Edit Device</b></div>
                        </div>
                        <div class="card-body text-left">
                            <section name="map">
                                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openlinkmap.org/small.php?lat={{$device->device_lat}}&lon={{$device->device_long}}&zoom=18&type=node" style="border: 1px solid black"></iframe>
                            </section>
                            <br>
                            <a href="{{ URL::to($url) }}" target="_blank"
                               class="btn btn-basic form-control">See on Google Maps</a>
                            <br>
                            <hr>
                            <br>
                            <form method="POST" action="{{ route('device.update') }}" enctype='multipart/form-data'>
                                <label for="name">Device Name*</label>
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$device->id}}">
                                <input class="form-control" id="name" name="name" type="text"
                                       placeholder="Device Name" required value="{{$device->name}}">
                                <br>
                                <label for="device_id">Device ID*</label>
                                <input class="form-control" id="device_id" name="device_id" type="number"
                                       placeholder="Device ID" required value="{{$device->device_id}}">

                                <br>
                                <label for="device_lat">Device Latitude*</label>
                                <input class="form-control" id="device_lat" name="device_lat" type="text"
                                       placeholder="Device Latitude Number" required value="{{$device->device_lat}}">

                                <br>
                                <label for="device_long">Device Longtitude*</label>
                                <input class="form-control" id="device_long" name="device_long" type="text"
                                       placeholder="Device Longtitude Number" required value="{{$device->device_long}}">

                                <br>
                                <label for="description">Device Description</label>
                                <input class="form-control" id="description" name="description" type="text"
                                       placeholder="Device Description" value="{{$device->decription}}">

                                <br>


                                <label for="image1">Image 1 /
                                    (Max 20MB) </label>
                                <div class="col-md-6">
                                    <input type="file" id="image1" name="image1"
                                           accept="image/*">

                                    @if ($errors->has('image1'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image1') }}</strong>
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
{{--                                <div class="row justify-content-center">--}}
{{--                                    <div class="col-md-12">--}}

{{--                                    </div>--}}
{{--                                    <div class="col-md-4">--}}
{{--                                       --}}
{{--                                    </div>--}}

{{--                                </div>--}}

                                <button type="submit" class="btn btn-basic form-control">Update Device
                                </button>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="btn btn-basic form-control" style="color:red; border-color: red;"
                                           href="{{route('device.delete',$user->id)}}"
                                           onclick="return confirm('Are you sure to Remove this device data? Once you done you cannot undo!')">
                                            <i class="fas fa-ban"></i> Delete User
                                        </a>

                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ url()->previous() }}" class="btn btn-basic form-control">Back</a>
                                    </div>

                                </div>
                                <br>
                                *Note: Delete Device will also delete all image in the same time
                            </form>

                            <br/>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @if($device->image1 != null)
                        <div class="card">
                            <div class="card-header">Image Scenario of AED 1</div>
                            <div class="card-body">
                                <div class="container-fluid">

                                    <img src="  {{asset($device->image1)}}" style="width:100%; height:auto;">
                                    <br>
                                    <a class="btn btn-basic form-control" style="color:red; border-color: red;"
                                       href="{{route('device.image.delete',[$device->id,1])}}"
                                       onclick="return confirm('Are you sure to Remove this image? Once you done you cannot undo!')">
                                        <i class="fas fa-ban"></i> Delete image 1
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endif
                    @if($device->image2 != null)
                        <div class="card">
                            <div class="card-header">Image Scenario of AED 2</div>
                            <div class="card-body">
                                <div class="container-fluid">

                                    <img src="  {{asset($device->image2)}}" style="width:100%; height:auto;">
                                    <br>
                                    <a class="btn btn-basic form-control" style="color:red; border-color: red;"
                                       href="{{route('device.image.delete',[$device->id,2])}}"
                                       onclick="return confirm('Are you sure to Remove this image? Once you done you cannot undo!')">
                                        <i class="fas fa-ban"></i> Delete image 2
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endif
                    @if($device->image3 != null)
                        <div class="card">
                            <div class="card-header">Image Scenario of AED 3</div>
                            <div class="card-body">
                                <div class="container-fluid">

                                    <img src="  {{asset($device->image3)}}" style="width:100%; height:auto;">
                                    <br>
                                    <a class="btn btn-basic form-control" style="color:red; border-color: red;"
                                       href="{{route('device.image.delete',[$device->id,3])}}"
                                       onclick="return confirm('Are you sure to Remove this image? Once you done you cannot undo!')">
                                        <i class="fas fa-ban"></i> Delete image 3
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

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
