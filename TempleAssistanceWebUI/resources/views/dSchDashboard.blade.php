@extends('layout.appDammaSch')

@section('title','Dhamma School Dashboard')

@section('body-content')

    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1><i class="fa fa-archive"></i> {{$response['name']}}</h1>
                {{--                <p>Widgets to interactively display data</p>--}}
            </div>
            <div>
                <ul class="breadcrumb">
                    <li><i class="fa fa-home fa-lg"></i></li>
                    <li>Dhamma School</li>
                    <li><a href="#">{{$response['name']}}</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
                    <div class="info">
                        <h4>Users</h4>
                        <p><b>5</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget-small info"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
                    <div class="info">
                        <h4>Likes</h4>
                        <p><b>25</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget-small warning"><i class="icon fa fa-files-o fa-3x"></i>
                    <div class="info">
                        <h4>Uploades</h4>
                        <p><b>10</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget-small danger"><i class="icon fa fa-star fa-3x"></i>
                    <div class="info">
                        <h4>Stars</h4>
                        <p><b>500</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
