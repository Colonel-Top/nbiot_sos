

    <div class="col-md-12 card">

        <div class="card-body" style="height:auto;">
            <div class="box-body COLFont">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <!-- Table Headings -->
                        <thead>
                        <th width="20%">Name</th>
                        <th width="20%">Device IMEI</th>
                        <th width="10%">Latitude</th>
                        <th width="10%">Longtitude</th>
                        <th width="10%">Alarm at</th>
                        <th width="20%">Description</th>
                        <th width="10%">Info</th>


                        </thead>

                        <!-- Table Body -->
                        <tbody>

                        @foreach($alarms as $alarm)

                            <tr>
                                <td class="table-text">
                                    {{($alarm->name)}}
                                </td>
                                <td class="table-text">
                                    {{($alarm->devices()->get()->first()->device_id)}}
                                </td>
                                <td class="table-text">
                                    {{$alarm->devices()->get()->first()->device_lat}}
                                </td>
                                <td class="table-text">

                                    {{$alarm->devices()->get()->first()->device_long}}
                                </td>
                                <td class="table-text">
                                    {{date('d-m-Y H:i:s', strtotime($alarm->created_at))}}
                                </td>
                                <td class="table-text">
                                    {{$alarm->devices()->get()->first()->description}}
                                </td>
                                <td class="table-text">
                                    <a class="btn btn-outline-secondary"
                                       href="{{route('device.show.info',$alarm->devices()->get()->first()->id)}}">
                                        See Device
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{--@foreach($alarms as $alarm)--}}

    {{--<div class="col-lg-5">--}}
    {{--<div class="media COLFONT">--}}
    {{--<a class="pull-left" href="{{$alarm->user_type == "general" ? route('admin.user.edit',$alarm->id) : route('admin.user.edittse',$alarm->id)}}">--}}
    {{--<img class="media-object dp2 img-circle" src="{{secure_asset($alarm->profile_pic)}}"--}}
    {{--style="width: 100px;height:100px;">--}}
    {{--</a>--}}
    {{--<div class="media-body padme">--}}
    {{--<h4 class="media-heading">--}}
    {{--<a href="{{$alarm->user_type == "general" ? route('admin.user.edit',$alarm->id) : route('admin.user.edittse',$alarm->id)}}">      {{$alarm->gender == "male" ? "Mr." : "Ms."}}--}}
    {{--{{($alarm->name)}} &nbsp; {{($alarm->lastname)}}</a>--}}

    {{--</h4>--}}
    {{--<h5>{{$alarm->user_type == "general" ? "General User" : ($alarm->user_type == "tse_student" ? "TSE Student":"TSE Personnel")}}</h5>--}}
    {{--<hr style="margin:8px auto">--}}
    {{--<span class="label label-default">{{($alarm->roles)}}</span>--}}
    {{--@if(!is_null($alarm->student_id))--}}
    {{--<span class="label label-default">{{$alarm->student_id}}</span>--}}

    {{--<span class="label label-default">{{$alarm->branch_engr}}</span>--}}
    {{--<span class="label label-info">&nbsp;Graduate(d):&nbsp;{{$alarm->graduate_year}}</span>--}}
    {{--@endif--}}


    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}

    {{--@endforeach--}}

