

    <div class="col-md-12 card">

        <div class="card-body" style="height:auto;">
            <div class="box-body COLFont">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <!-- Table Headings -->
                        <thead>
                        <th width="20%">Name</th>
                        <th width="20%">Email</th>
                        <th width="20%">Type</th>
                        <th width="20%">Register at</th>
                        <th width="10%">Last Login</th>
                        <th width="10%">Control</th>

                        </thead>

                        <!-- Table Body -->
                        <tbody>

                        @foreach($users as $user)

                            <tr>

                                <td class="table-text">
                                    {{($user->name)}}
                                </td>

                                <td class="table-text">
                                    {{$user->email}}
                                </td>
                                <td class="table-text">

                                    {{ucfirst($user->role)}}
                                </td>
                                <td class="table-text">
                                    {{date('d-m-Y H:i:s', strtotime($user->created_at))}}
                                </td>
                                <td class="table-text">
                                    {{date('d-m-Y H:i:s', strtotime($user->updated_at))}}
                                </td>
                                <td class="table-text">
                                    <a class="btn btn-outline-success"
                                       href="#">
                                        Details
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

