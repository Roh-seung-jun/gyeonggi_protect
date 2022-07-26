@extends('header')


@section('contents')
    <div class="justify-content-center flex-column align-items-center d-flex w-100" style="height: 900px">
        <h4>모든 정원 소식지</h4>
        <table class="table w-75">
            <thead>
            <tr>
                <td>글 게시판</td>
                <td>글 번호</td>
                <td>글 제목</td>
                <td>글쓴이</td>
                <td>작성일</td>
                <td>조회 수</td>
            </tr>
            </thead>
            <tbody>
            @foreach($data['notice'] as $item)
            <tr>
                <td>{{$item->garden['name']}}</td>
                <td>{{$item['id']}}</td>
                <td>{{$item['title']}}</td>
                <td>{{$item->user['name']}}</td>
                <td>{{$item['date']}}</td>
                <td>{{$item['cnt']}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <h4>각 정원의 소식지</h4>
        <div class="d-flex w-50 h-25 flex-wrap">
        @foreach($data['garden'] as $item)
            <button class="btn btn-outline-success m-1">{{$item['name']}}</button>
        @endforeach
        </div>
    </div>

@endsection
