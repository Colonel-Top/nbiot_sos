@extends('layouts.app')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<script>
    var mymap = L.map('mapid').setView([51.505, -0.09], 13);

</script>
@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-12 text-center animated pulse">

                <h5 class="COLFont font16 ">"User Edit"</h5>

                <h5 class="COLFont font16 hardgolden-font">-----------<i class="fas fa-spa"></i>-----------
                </h5>
            </div>

        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="panel-heading"><b>Edit User</b></div>
                        </div>
                        <div class="card-body text-left">

                            <br>
                            <form method="POST" action="@if (Auth::user()->role == "admin") {{ route('user.update') }} @else {{ route('profile.update') }} @endif" enctype='multipart/form-data'>
                                <label for="name">Name*</label>
                                @csrf

                                {{--                                $table->bigIncrements('id');--}}
                                {{--                                $table->string('name');--}}
                                {{--                                $table->string('email',35)->unique();--}}
                                {{--                                $table->timestamp('email_verified_at')->nullable();--}}
                                {{--                                $table->string('password');--}}
                                {{--                                $table->string('role', 255)->default('user');--}}


                                <input type="hidden" id="id" name="id" value="{{$user->id}}">
                                <input class="form-control" id="name" name="name" type="text"
                                       placeholder="Full Name" required value="{{$user->name}}">
                                <br>
                                <label for="email">Email*</label>
                                <input class="form-control" id="email" name="email" type="email"
                                       placeholder="Email Address" required value="{{$user->email}}">

                                <br>
                                @if(Auth::check() and Auth::user()->role=="admin")
                                    <label for="name">Role*</label>

                                    <select id="role" name="role" class="form-control">
                                        <option value="admin" @if($user->role == "admin") selected @endif>Administrator</option>
                                        <option value="user" @if($user->role == "user") selected @endif>User</option>
                                        <option value="requested" @if($user->role == "requested") selected @endif>Requested</option>
                                    </select>
                                @endif
                                <br>
                                <label for="password">Password (Empty to not change)</label>
                                <input id="password" type="password"
                                       class="form-control"
                                       name="password">

                                <br>
                                <label for="password-confirm"

                                      >{{ __('Confirm Password') }} (Empty to not
                                    change)</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation">

                                <br>
<label>Member since {{date('d/m/Y @ H:i:s', strtotime($user->created_at))}}</label>
                                <br>
                                <label>Last known online {{date('d/m/Y @ H:i:s', strtotime($user->updated_at))}}</label>
                                <br>
                                <button type="submit" class="btn btn-outline-success form-control">Update User
                                </button>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="btn btn-basic form-control" style="color:red; border-color: red;"
                                           href="{{route('user.delete',$user->id)}}"
                                           onclick="return confirm('Are you sure to Remove this user data? Once you done you cannot undo!')">
                                            <i class="fas fa-ban"></i> Delete Users
                                        </a>

                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ url()->previous() }}" class="btn btn-basic form-control">Back</a>
                                    </div>

                                </div>

                            </form>

                            <br/>

                        </div>
                    </div>
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
