

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
                        <th width="10%">Last Alarm</th>
                        <th width="10%">Created at</th>
                        <th width="10%">Control</th>
                        <th width="10%">Alarm</th>

                        </thead>

                        <!-- Table Body -->
                        <tbody>

                        @foreach($devices as $user)

                            <tr>

                                <td class="table-text">
                                    {{($user->name)}}
                                </td>
                                <td class="table-text">
                                    {{($user->device_id)}}
                                </td>
                                <td class="table-text">
                                    {{$user->device_lat}}
                                </td>
                                <td class="table-text">

                                    {{$user->device_long}}
                                </td>
                                <td class="table-text">
                                    {{date('d-m-Y H:i:s', strtotime($user->created_at))}}
                                </td>
                                <td class="table-text">
                                    {{date('d-m-Y H:i:s', strtotime($user->created_at))}}
                                </td>
                                <td class="table-text">
                                    <a class="btn btn-outline-primary"
                                       href="{{route('device.show.edit',$user->id)}}">
                                        Edit
                                    </a>
                                </td>
                                <td class="table-text">
                                    <a class="btn btn-outline-secondary"
                                       href="{{route('device.show.info',$user->id)}}">
                                        Info
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

