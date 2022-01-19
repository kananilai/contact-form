@extends('layouts.index')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <table class="table">
        <tr>
            <td class="title" colspan="2">
                内容確認
            </td>
        </tr>
        <form action="/thanks/store" method="POST">
        @csrf
            <tr>
                <td class="left">
                    <label for="name" class="label">お名前</label>
                </td>
                <td class="right">
                    <div>
                        {{ $items['last_name'] }}
                        {{ $items['first_name'] }}
                    </div>
                    <input type="hidden" value="{{ $items['last_name'] .$items['first_name']  }}" name="fullname">
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="gender" class="label">性別</label>
                </td>
                <td class="right">
                    <div class="gender">
                        @if($items['gender'] == 1)
                        男性
                        @else
                        女性
                        @endif
                    </div>
                    <input type="hidden" value="{{ $items['gender'] }}" name="gender">
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="email" class="label">メールアドレス</label>
                </td>
                <td class="right">
                    <div>
                        {{ $items['email'] }}
                    </div>
                    <input type="hidden" value="{{ $items['email'] }}" name="email">
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="post_code" class="label">郵便番号</label>
                </td>
                <td class="right">
                    <div>
                        {{ $items['post_code'] }}
                    </div>
                    <input type="hidden" value="{{ $items['post_code'] }}" name="postcode">
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="address" class="label">住所</label>
                </td>
                <td class="right">
                    <div>
                        {{ $items['address'] }}
                    </div>
                    <input type="hidden" value="{{ $items['address'] }}" name="address">
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="building" class="label">建物名</label>
                </td>
                <td class="right">
                    <div class="bilding">
                        {{ $items['building'] }}
                    </div>
                    <input type="hidden" value="{{ $items['building'] }}" name="building_name">
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="content" class="label">ご意見</label>
                </td>
                <td class="right">
                    <div>
                        {{ $items['opinion'] }}
                    </div>
                    <input type="hidden" value="{{ $items['opinion'] }}" name="opinion">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="button">送信</button>
                    <a class="fix" onClick="history.back()">修正する</a>
                <td>
            </tr>
        </form>
    </table>
@endsection
