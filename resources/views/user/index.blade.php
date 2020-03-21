@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-12 text-center animated pulse">

                <h5 class="COLFont font16 ">"User Management"</h5>

                <h5 class="COLFont font16 hardgolden-font">-----------<i class="fas fa-spa"></i>-----------
                </h5>
            </div>

        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">


                {{--<div class="col-md-2">--}}
                {{--<h3 class="dancing-script">Last Product</h3>--}}
                {{--<br>--}}
                {{--<div class="card">--}}

                {{--<div class="card-body COLFont" style="height:310px;">--}}
                {{--@if(is_null($lastprod ))--}}
                {{--<p>Product Name: -</p>--}}
                {{--<p>Product Instock: -</p>--}}
                {{--<p>Product Description: -</p>--}}
                {{--<p>Product price: -</p>--}}
                {{--<p>Product Created: -</p>--}}
                {{--@else--}}
                {{--<p>Product Name: {{$lastprod->name}}</p>--}}
                {{--<p>Product Instock: {{$lastprod->stock}}</p>--}}
                {{--<p>Product Description: {{$lastprod->desc}}</p>--}}
                {{--<p>Product price: {{$lastprod->price}}</p>--}}
                {{--<p>Product Created: {{date('d-m-Y H:i:s', strtotime($lastprod->created_at))}}</p>--}}
                {{--@endif--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="col-md-12 text-center">
                    <h3 class="dancing-script">Search user</h3>
                    <br>

                    <div>
                        <h3 class="dancing-script">Statistic</h3>
                        <br>
                        <div class="row text-center">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">Total Account</div>
                                    <div class="card-body"> {{App\User::all()->count()}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">Administrator User</div>
                                    <div class="card-body"> {{App\User::where('role','admin')->count()}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header">User</div>
                                    <div class="card-body"> {{App\User::where('role','user')->count()}}</div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h3 class="dancing-script">Search</h3>
                        <br>
                        <label for="search">Search Available on: Name, Email<br>Roles: admin, user</label>
                        <br>
                        <input type="text" class="form-controller" id="search" name="search" style="width: 80%;">
                        {{--                            <form method="POST" style="visibility: hidden; display: none;"--}}
                        {{--                                  action="{{ route('product.insert.management') }}"--}}
                        {{--                                  enctype="multipart/form-data">--}}

                        {{--                                @csrf--}}

                        {{--                                <div class="form-group row">--}}
                        {{--                                    <label for="name"--}}
                        {{--                                           class="col-sm-4 col-form-label">Name</label>--}}

                        {{--                                    <div class="col-md-6">--}}
                        {{--                                        <input id="name" type="text"--}}
                        {{--                                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"--}}
                        {{--                                               name="name"--}}
                        {{--                                               value="{{ old('name') }}" autofocus>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="form-group row">--}}
                        {{--                                    <label for="lastname"--}}
                        {{--                                           class="col-sm-4 col-form-label">Lastname</label>--}}

                        {{--                                    <div class="col-md-6">--}}
                        {{--                                        <input id="lastname" type="text"--}}
                        {{--                                               class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"--}}
                        {{--                                               name="lastname"--}}
                        {{--                                               value="{{ old('lastname') }}">--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="form-group row">--}}
                        {{--                                    <label for="name"--}}
                        {{--                                           class="col-sm-4 col-form-label">Email</label>--}}

                        {{--                                    <div class="col-md-6">--}}
                        {{--                                        <input id="name" type="text"--}}
                        {{--                                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"--}}
                        {{--                                               name="name"--}}
                        {{--                                               value="{{ old('name') }}">--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                                <div class="form-group row justify-content-center">--}}
                        {{--                                    <div class="container">--}}
                        {{--                                        <div class="row justify-content-center">--}}
                        {{--                                            <label for="admin"--}}
                        {{--                                                   class="col-form-label">Admin</label>--}}

                        {{--                                            <div class="col-md-1">--}}
                        {{--                                                <input id="admin" type="checkbox"--}}
                        {{--                                                       class="form-control{{ $errors->has('admin') ? ' is-invalid' : '' }}"--}}
                        {{--                                                       name="admin"--}}
                        {{--                                                       value="1">--}}
                        {{--                                            </div>--}}

                        {{--                                            <label for="tse"--}}
                        {{--                                                   class="col-form-label">TSE Personnel</label>--}}

                        {{--                                            <div class="col-md-1">--}}
                        {{--                                                <input id="tse" type="checkbox"--}}
                        {{--                                                       class="form-control{{ $errors->has('tse') ? ' is-invalid' : '' }}"--}}
                        {{--                                                       name="tse"--}}
                        {{--                                                       value="1">--}}
                        {{--                                            </div>--}}

                        {{--                                            <label for="general"--}}
                        {{--                                                   class="col-form-label">General</label>--}}

                        {{--                                            <div class="col-md-1">--}}
                        {{--                                                <input id="general" type="checkbox"--}}
                        {{--                                                       class="form-control{{ $errors->has('general') ? ' is-invalid' : '' }}"--}}
                        {{--                                                       name="general"--}}
                        {{--                                                       value="1">--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <hr>--}}
                        {{--                                <div class="form-group row justify-content-center">--}}
                        {{--                                    <div class="col-md-2 ">--}}


                        {{--                                        <button type="submit" class="btn btn-warning">--}}
                        {{--                                            Search--}}
                        {{--                                        </button>--}}

                        {{--                                    </div>--}}

                        {{--                                    <div class="col-md-2">--}}


                        {{--                                        <button type="reset" class="btn btn-dangers">--}}
                        {{--                                            Reset Field--}}
                        {{--                                        </button>--}}

                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </form>--}}

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


            <hr>
            <div class="row" id="livedata">

@include('user.search')

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
            <hr>
            <div class="row justify-content-center" id="defart">
                {{ $users->links() }}
            </div>

        </div>
    </div>
    <script type="application/javascript">

        $('#search').on('keyup', function () {

            $value = $(this).val();
            console.log($value);
            $.ajax({

                type: 'POST',

                url: '{{URL::to('/admin/user/search')}}',

                data: {'search': $value, _token: "{{csrf_token()}}"},

                success: function (data) {
                    // console.log(data);
                    $('#livedata').html(data);
                    if($value === "") {
                        $("#defart").show();
                        console.log("Hiding");
                    }
                    else {
                        $("#defart").hide();
                        console.log("Showing");
                    }
                }

            });


        });

    </script>
@endsection
