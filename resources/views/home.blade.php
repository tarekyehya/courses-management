@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
=======
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(auth()->user()->role)
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th width="280px">Action</th>
                                </tr>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id}}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                                                {{--                                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>--}}

                                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                            {!! $users->links() !!}
                            @else
                                <div class="alert alert-warning" role="alert">
                                  access denied!!
                                </div>
                        @endif

                    </div>
>>>>>>> 57f7c164cb409a5fd263eb4a1290c61ce2a7da9a
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
>>>>>>> 57f7c164cb409a5fd263eb4a1290c61ce2a7da9a
@endsection
