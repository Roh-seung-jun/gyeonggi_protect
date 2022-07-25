@extends('header')
@section('script')
    <script>

        function getfile(){
            if(this.files.length > 4){
                alert('파일은 최대 4개까지 입니다.');
                return $(this).val('');
            }
        }

        $(()=>{
            $(document).on('mousedown','.modal input[name="score"]',function(e){
                $(this).val(Math.floor(e.offsetX/15));
                document.querySelector('.modal .star span').style.width = `${this.value * 10}%`;
            })
            .on('change','#file',getfile)
            .on('click','.tag',function (){
                $(this).hasClass('active') ? $(this).removeClass('active') : $(this).addClass('active');
            })
            .on('click','.false',function(){
                if(!$('.tag.active')[0]) return alert('태그는 1개 이상선택해야함');
                $('.true').click();
            })
        })

        window.onload = async () =>{
            let file = await fetch('public/tag.txt').then(res=>res.text());
            let tag = '<button class="tag btn btn-outline-info m-1">'+file.replaceAll(',',`</button><button class="tag btn btn-outline-info m-1">`) + `</button>`
            $('.tag_list').html(tag);
        }
    </script>
@endsection

@section('style')
    <style>
        .tag.active{
            background-color: #0f6674;
            color: #fff;
        }
    </style>
@endsection
@section('contents')
    <div class="flex-column d-flex justify-content-center align-items-center w-100" style="height: 90vh">
        <h4>대기중인 내역</h4>
        <table class="table w-50 text-center">
            <thead>
            <tr>
                <th>일정</th>
                <th>인원</th>
                <th>가격</th>
                <th>방문 정원</th>
                <th>취소</th>
                <th>입장권</th>
            </tr>
            </thead>
            <tbody>
            @foreach(auth()->user()->promise->where('start_date','>',date('Y-m-d')) as $item)
                @if($item['cancel'] !== 'cancel')
            <tr>
                <td>{{$item['start_date']}} ~ {{$item['end_date']}}</td>
                <td>{{$item['people']}}</td>
                <td>{{$item['price']}}</td>
                <td>{{$item->garden->name}}</td>
                <td>
                    @if($item['state'] !== 'cancel')
                        @if((new DateTime($item['start_date']))->diff((new DateTime(date('Y-m-d'))))->days >= 7)
                        <button class="btn btn-outline-secondary" onclick="location.href='{{route('delete',$item['id'])}}'">취소하기</button>
                        @else
                            <button class="btn btn-outline-secondary" onclick="alert('취소 불가한 일정입니다.')">취소하기</button>
                        @endif
                        @else
                        취소됌
                    @endif
                </td>
                <td><button class="btn btn-outline-info">입장권 발급</button></td>
            </tr>
                @endif
            @endforeach
            <tr class="text-center">
                <td colspan="6" ><h3>종료된 일정</h3></td>
            </tr>
            @foreach(auth()->user()->promise->where('start_date','<',date('Y-m-d')) as $idx => $item)
                @if($item->review->count() === 0)
                <tr>
                    <td>{{$item['start_date']}} ~ {{$item['end_date']}}</td>
                    <td>{{$item['people']}}</td>
                    <td>{{$item['price']}}</td>
                    <td>{{$item->garden->name}}</td>
                    <td>
                        지난 일정입니다.
                    </td>
                    <td><button class="btn btn-outline-info" data-toggle="modal" data-target="#modal_{{$idx}}">후기 작성</button></td>
                </tr>
                <div class="modal fade" id="modal_{{$idx}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>리뷰작성</h3>
                            </div>
                            <form class="modal-body p-3" method="post" action="{{route('review',$item['id'])}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <p class="m-0">내용</p>
                                    <textarea name="contents" id="contents" cols="30" rows="5" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <p class="m-0">사진</p>
                                    <input type="file" class="form-control-file" name="file[]" id="file" multiple accept="image/*">
                                </div>
                                <div>
                    <span class="position-relative star" style="font-size: 2rem;color: #ccc">
                    ★★★★★
                    <span class="position-absolute" style="left: 0;width: 0;overflow: hidden;color: #ffcc33;">★★★★★</span>
                    <input type="range" step="1" min="0" max="10" value="1" name="score" class="position-absolute" style="width: 100%;height: 100%;opacity: 0;left:0;z-index: 99;">
                </span>
                                </div>
                                <div class="d-flex tag_list flex-wrap"></div>
                                <button class="btn btn-outline-info false" type="button">등록</button>
                                <button class="btn btn-outline-info d-none true">등록</button>
                            </form>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            </tbody>
        </table>

        @if(auth()->user()->type === 'management')
            <h2 class="mt-5">내 정원 일정</h2>
            @foreach(auth()->user()->garden as $item)
                <table class="table w-50 text-center">
                    <thead>
                    <tr>
                        <th>일정</th>
                        <th>인원</th>
                        <th>가격</th>
                        <th>취소</th>
                        <th>상태</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($item->promise as $i)
                    <tr>
                        <td>{{$i['start_date']}} ~ {{$i['end_date']}}</td>
                        <td>{{$i['people']}}</td>
                        <td>{{$i['price']}}</td>
                        <td>
                            @if($i['state'] == 'cancel')
                                취소 완료
                            @else
                                @if($i['end_date'] <= date('Y-m-d'))
                                    방문
                                @else
                                    <button class="btn btn-outline-info" onclick="location.href='{{route('delete',$i['id'])}}'">취소하기</button></td>
                                @endif
                            @endif
                        <td>
                            @if($i['state'] == 'cancel')
                                취소 완료
                            @else
                                @if($i['end_date'] <= date('Y-m-d'))
                                    방문
                                @else
                                    예약
                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach
                    </tbody>
                </table>
            @endforeach
        <form class="form-group w-25" method="post" action="{{route('disable')}}">
            @csrf
            <h3>불가능한 날짜 지정</h3>
            <div class="d-flex">
            <input type="date" class="form-control" name="date">
            <button class="btn btn-outline-info ml-1 w-25">수정</button>
            </div>
        </form>
            <table class="table w-25">
                <thead>
                <tr>
                    <td>불가능한 일정</td>
                </tr>
                </thead>
                <tbody>
                @foreach(auth()->user()->garden as $i)
                    @foreach($i->disable as $item)
                <tr>
                    <td>{{$item['date']}}</td>
                </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
