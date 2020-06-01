@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span class="float-left">Dashboard</span>
                        <span class="float-right">
                                <a href="{{ url('home') }}" class="btn btn-xs btn-default pull-right">
                                    <button type="submit" class="btn btn-info">Admin Dashboard</button>
                                </a>
                        </span>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ url('courses') }}" class="pull-right">
                                    <button type="submit" class="btn btn-primary">Add New Course</button>
                                </a>
                            </div>
                            <br>
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ url('student') }}" class="pull-right">
                                    <button type="submit" class="btn btn-primary">Student</button>
                                </a>
                            </div>
                            <br>
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ url('instructor') }}" class="pull-right">
                                    <button type="submit" class="btn btn-primary">Instructor</button>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--       <body>--}}
{{--                     <h1> welcome to courses  management system  </h1>--}}
{{--                      <br>--}}
{{--                     <!--      courses   page    -->--}}
{{--                      <a href="{{ url('courses') }}" class="btn btn-xs btn-info pull-right">--}}
{{--                      --}}
{{--                      <button>--}}
{{--                           add  new course --}}
{{--                      </button>--}}
{{--                      </a>--}}
{{--                     <div class="form-group row mb-0">--}}
{{--                         <div class="col-md-6 offset-md-4">--}}
{{--                             <button type="submit" class="btn btn-primary">--}}
{{--                                 {{ __('Add New Course') }}--}}
{{--                             </button>--}}
{{--                         </div>--}}
{{--                     </div>--}}

{{--                        <!--       end course page       -->--}}

{{--           <br>--}}
{{--           <br>--}}
{{--   <div class="btn-group">--}}

{{--   <a href="{{ url('student') }}" class="btn btn-xs btn-info pull-right">--}}

{{--                      <button>--}}
{{--                      student--}}
{{--                      </button>--}}
{{--                      </a>--}}

{{--   <button type="submit">instructor</button>--}}

{{--</div>--}}

{{--        </body>--}}
{{--</html>--}}
