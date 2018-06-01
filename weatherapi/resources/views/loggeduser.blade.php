@extends('layouts.app')

@section('content')

@inject('tok', 'App\Http\Controllers\ApiController')

<h2>API Key</h2>
<textarea class="form-control" id="copytoclipboard" rows="7" >{{ $tok->mytoken()}} </textarea>
<button type="button" onclick="myFunction()" class="btn btn-info">copy</button

@endsection