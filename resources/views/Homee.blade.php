@extends('layouts.master1')
@section('konten')
<!DOCTYPE html>
<html>
<head>
    <title>Caklihong</title>
</head>
<body >
<center> <h1>Caklihong</h1></center>

<div class="panel panel-default">

                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

Silahkan Log In !
                </div>
            </div>
            
</body>
</html>

@endsection<br>
