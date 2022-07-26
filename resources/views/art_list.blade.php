@extends('header')


@section('contents')
    <div class="d-flex justify-content-center align-items-center">
        <table class="table w-75" style="margin-top: 200px;">
            <thead class="thead-light">
            <tr>
                <th>작품 사진</th>
                <th>작품 이름</th>
                <th>작품 내용</th>
                <th>가격</th>
                <th>상세보기</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>
                        <img src="{{asset('public/data/image/'.$item['type'].'/'.$item['product_img'])}}" alt="" style="width: 50px;height: 50px">
                    </td>
                    <td>{{$item['art_name']}}</td>
                    <td>{{$item['description']}}</td>
                    <td>{{$item['price']}}</td>
                    <td><button class="btn btn-outline-success" onclick="location.href='{{route('art_view',$item['id'])}}'">상세보기</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
