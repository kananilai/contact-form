@extends('layouts.index')
@section('content')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <div class="thanks">
        <p>ご意見いただきありがとうございました。</p>
        <button class="button">トップページへ</button>
    </div>

<style>
.thanks{
    text-align: center;
    margin:300px;
}
.button{
    text-align: center;
    margin:25px auto;
    display:block;
    border:#000;
    border-radius: 5px;
    background-color: #000;
    padding: 10px;
    text-align: center;
    color: white;
    font-weight: bold;
    width: 150px;
}
</style>
@endsection
