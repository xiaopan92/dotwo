@extends('layouts.default')
@section('title','home')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Hello Laravel</h1>
            <p>你现在所看到的是<a href="/">Laravel入门教程</a> 的示例项目主页</p>
            <p>一切，将从这里开始</p>
            <p>
                <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
            </p>
        </div>

    </div>

@stop