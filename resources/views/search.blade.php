@extends('layouts.admin')
@section('content')
<div class="search_box">
    <form class="search" method="post" action="/admin/search">
        @csrf
        <table>
            <tr>
                <td>
                    <label for="name" class="label">お名前</label>
                </td>
                <td>
                    <input type="text" id="name" name="fullname" size="40" class="input">
                </td>
                <td>
                    <label for="gender" class="label">性別</label>
                    <label><input type="radio" value="0" name="gender" checked class="gender_input">全て</label>
                    <label><input type="radio" value="1" name="gender" class="gender_input">男性</label>
                    <label><input type="radio" value="2" name="gender" class="gender_input">女性</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="start" class="label">登録日</label>
                </td>
                <td  colspan="2">
                    <input type="date" id="start" name="start" size="40" class="input date_input">
                    ~
                    <input type="date" id="end" name="end" size="40" class="input date_input">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email" class="label">メールアドレス</label>
                </td>
                <td>
                    <input type="text" id="email" name="email" size="40" class="input">
                </td>
            </tr>
        </table>
        <div colspan="6" class="btn_cell">
            <button class="button_search">検索</button>
            <a href="{{ route('admin') }}">リセット</a>
        </div>
    </form>
</div>
<div class="result">
    <table>
        {{ $finditems->links() }}
        <thead>
            <th class="id ">ID</th>
            <th class="name">お名前</th>
            <th class="gender">性別</th>
            <th class="email">メールアドレス</th>
            <th class="opinion">ご意見</th>
            <th></th>
        </thead>
        @foreach ($finditems as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->fullname }}</td>
            @if($item->gender == 1)
            <td>男性</td>
            @else
            <td>女性</td>
            @endif
            <td>{{ $item->email }}</td>
            <td>{{ $item->opinion }}</td>
            <td>
                <form action="{{ route('delete',['id' => $item->id]) }}" method="post">
                    @csrf
                    <button type="submit" class="button">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

