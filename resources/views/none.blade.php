@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-12 text-center animated pulse">

                <h5 class="COLFont font16 ">"Your Permission still on request please Contact your administrator to grant your permission"</h5>
                {{--                <h5 class="COLFont font16 ">"Device Information"</h5>--}}

                <h5 class="COLFont font16 hardgolden-font">-----------<i class="fas fa-spa"></i>-----------
                </h5>

                <a href="{{route('logout')}}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>

                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            </div>

        </div>
        <br>
        <br>


    </div>

@endsection
