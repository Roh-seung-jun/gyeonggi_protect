@extends('header')

@section('script')
    <script>
        $(()=>{
            $(document)
            .on('click','#buy',buy)
            .on('click','#csv',download)
        })


        function buy(){
            let input = $('.art');
            let arr = [];
            input.each((idx,item)=>{
                let check = $(item).is(":checked");
                if(check){
                    arr.push($(item).attr('data-id'))
                }
            })
            if(arr.length <= 0) return;
            $.ajax({
                url : '{{route('buy')}}',
                data : {
                    _token : '{{csrf_token()}}',
                    type : 'multi',
                    'arr' : arr
                },
                method : 'post',
                success : function(e){
                    location.reload();
                },
                onerror : (res)=>console.log(res.response)
            })
        }

        function download(){
            let fileName = 'download.csv';
            let csv = createCSV();
            let tag = document.createElement('a');
            let blob = new Blob(["\uFEFF" + csv],{type:'text/csv; charset=utf-8'});

            let url = URL.createObjectURL(blob);
            $(tag).attr({"download":fileName,'href' : url});
            tag.click();
        }

        function createCSV(){
            let answer = '';
            let thead = $('#history th');

            thead.each((idx,item)=>{
                answer += item.innerText+',';
            })
            answer += '\n';

            let table_data = $('#history tr.data');
            table_data.each((idx,item)=>{
                answer += $(item).find('.date').text() +',';
                answer += $(item).find('.code').text() +',';
                answer += $(item).find('.name').text() +',';
                answer += $(item).find('.price').text() +',\n';
            })

            return answer;
        }


    </script>
    @endsection

@section('contents')
    <div class="d-flex flex-column justify-content-center align-items-center" style="margin-top: 200px">
        <div class="d-flex w-50 justify-content-between align-items-center">
            <h1>장바구니</h1>
            <button class="btn btn-outline-success h-50" id="buy">구매하기</button>
        </div>
        <table class="table w-50 text-center" >
            <thead class="thead-dark">
            <tr>
                <th>선택</th>
                <th>작품 사진</th>
                <th>작품 이름</th>
                <th>작품 가격</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data['cart'] as $item)
                <tr class="align-middle">
                    <td>
                        <input type="checkbox" name="art" class="art" data-id="{{$item->id}}">
                    </td>
                    <td class="align-middle"><img src="{{asset('./public/data/image/'.$item->art->type.'/'.$item->art->product_img)}}" alt="" style="width: 100px;height: 100px;"></td>
                    <td class="align-middle">{{$item->art->art_name}}</td>
                    <td class="align-middle">{{$item->art->price}}원</td>
                </tr>
            @endforeach
            <tr></tr>
            </tbody>
        </table>




        <div class="d-flex w-50 justify-content-between align-items-center" style="margin-top: 200px;">
            <h1>구매내역</h1>
            <div class="d-flex">
                <button class="btn btn-outline-success h-50 m-1" id="buy">구매하기</button>
                <button class="btn btn-outline-success h-50 m-1" id="csv">구매 내역 다운</button>
            </div>
        </div>
        <table class="table w-50 text-center" id="history">
            <thead class="thead-dark">
            <tr>
                <th>구매날짜</th>
                <th>구매 번호</th>
                <th>작품 이름</th>
                <th>판매 가격</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data['history'] as $idx =>$item)
                <tr class="align-middle data">
                    @if(isset($data['history'][$idx-1]))
                        @if($data['history'][$idx-1]['buy_date'] === $item['buy_date'])
                            @else
                            <td class="align-middle date" rowspan="{{$item->countInDB($item['buy_date'])}}">{{$item['buy_date']}}</td>
                            @endif
                        @else
                        <td class="align-middle date" rowspan="{{$item->countInDB($item['buy_date'])}}">{{$item['buy_date']}}</td>
                    @endif
                    @if(isset($data['history'][$idx-1]))
                        @if($data['history'][$idx-1]['code'] === $item['code'])
                        @else
                                <td class="align-middle code" rowspan="{{$item->countInCode($item['code'])}}">{{$item->code}}</td>
                            @endif
                    @else
                            <td class="align-middle code" rowspan="{{$item->countInCode($item['code'])}}">{{$item->code}}</td>
                    @endif
                        @if($item->art !== null)
                    <td class="align-middle name">{{$item->art->name}}</td>
                    <td class="align-middle price">{{$item->art->price}}</td>
                        @else
                    <td colspan="2">이미 삭제된 작품입니다.</td>
                    @endif
                </tr>
            @endforeach
            <tr></tr>
            </tbody>
        </table>
    </div>
@endsection
