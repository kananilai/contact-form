@extends('layouts.index')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <table class="table">
        <tr>
            <td class="title" colspan="2">
                お問い合わせ
            </td>
        </tr>
        <form action="/check" method="POST">
        @csrf
            <tr>
                <td class="left">
                    <label for="name" class="label">お名前</label><span class="must">※</span>
                </td>
                <td class="right">
                    <div class="name_input">
                        <div>
                            <input type="text" id="last_name" name="last_name" class="last_name text" size="30" value="{{ old('last_name') }}">
                            <p><small>例)　山田</small></p>
                            <p class="alertarea"></p>
                        </div>
                        <div>
                            <input type="text" id="first_name" name="first_name" class="first_name  text" size="30" value="{{ old('first_name') }}">
                            <p><small>例)　太郎</small></p>
                            <p class="alertarea"></p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="gender" class="label">性別</label><span class="must">※</span>
                </td>
                <td class="right">
                    <div class="gender">
                        <label class="gender-label"><input type="radio" name="gender" value="1" checked class="radio" {{ old ('gender') == '男性' ? 'checked' : '' }}>　男性</label>
                        <label><input type="radio" name="gender" value="2" class="radio" {{ old ('gender') == '女性' ? 'checked' : '' }}>　女性</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="email" class="label">メールアドレス</label><span class="must">※</span>
                </td>
                <td class="right">
                    <div>
                        <input type="email" id="email" name="email" class="email  text" size="70" value="{{ old('email_name') }}">
                        <p><small>例)　test@example.com</small></p>
                        <p class="alertarea"></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="post_code" class="label">郵便番号</label><span class="must">※</span>
                </td>
                <td class="right">
                    <div>
                        〒<input type="text" id="post_code" name="post_code" class="post-code text" onKeyUp="AjaxZip3.zip2addr(this,'','address','address')" size="65" value="{{ old('post_code') }}">
                        <p><small>例)　123-4567</small></p>
                        <p class="alertarea"></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="address" class="label">住所</label><span class="must">※</span>
                </td>
                <td class="right">
                    <div>
                        <input type="text" id="address" name="address" class="address text" size="70" value="{{ old('address') }}">
                        <p><small>例)　東京都渋谷区千駄ヶ谷1-2-3</small></p>
                        <p class="alertarea"></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="building" class="label">建物名</label>
                </td>
                <td class="right">
                    <div class="bilding">
                        <input type="text" id="text" name="building"class="text" size="70" value="{{ old('building') }}">
                        <p><small>例)　千駄ヶ谷マンション101</small></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label for="opinion" class="label">ご意見</label><span class="must">※</span>
                </td>
                <td class="right">
                    <div>
                        <textarea rows="7" class="opinion" cols="70" value="{{ old('opinion') }}" name="opinion"></textarea>
                        <p class="alertarea"></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="button">確認</button>
                <td>
            </tr>
        </form>
    </table>
    <script src="{{ asset('/js/validation.js') }}"></script>
@endsection
