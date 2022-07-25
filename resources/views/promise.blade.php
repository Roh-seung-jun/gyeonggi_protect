@extends('header')

@section('script')
    <script>
        function check(){
            let people = $('#people').val();
            let start_date = $('#start_date').val();
            let end_date = $('#end_date').val();

            if(!people || !start_date || !end_date) return alert('필수 입력값이 누락되었습니다.');

            $.ajax({
                url : '{{route('check')}}',
                method : 'post',
                data : {
                    _token : '{{csrf_token()}}',
                    start_date,
                    end_date,
                    people,
                    id : '{{$data['id']}}'
                },
                success : function (e){
                    if(parseInt(e) === 1)return alert('신청 불가능한 일정이 포함되어 있습니다.');
                    $('#price').val(parseInt(e[0]['days'])* 1000 *parseInt(people));
                    $('.check').removeClass('disabled').attr('type','submit');
                }
            })
        }

        function disable(){
            $('.check').addClass('disabled').attr('type','button');
        }
    </script>
@endsection

@section('contents')
    <form class="d-flex justify-content-center align-items-center flex-column w-100" style="height: 900px" method="post" action="{{route('promise')}}">
        @csrf
        <h2>예약하기</h2>
        <div class="form-group">
            <p class="m-0">인원</p>
            <input type="number" class="form-control" name="people" id="people" onchange="disable()">
        </div>
        <div class="form-group">
            <p class="m-0">시작일</p>
            <input type="date" class="form-control" name="start_date" id="start_date" onchange="disable()">
        </div>
        <div class="form-group">
            <p class="m-0">마감일</p>
            <input type="date" class="form-control" name="end_date" id="end_date" onchange="disable()">
        </div>
        <div class="form-group">
            <p class="m-0">가격</p>
            <input type="number" class="form-control" readonly name="price" id="price">
        </div>
        <input type="text" class="d-none" value="{{$data['id']}}" name="garden_id">
        <div class="d-flex">
            <button class="btn btn-outline-info m-1" type="button" onclick="check()">방문 예약 가능 여부</button>
            <button class="btn btn-outline-info check m-1 disabled" type="button">예약하기</button>
        </div>
    </form>
@endsection
