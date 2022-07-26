@extends('header')
@section('script')
    <script>
        $(()=>{
            $(document)
            .on('change','#_type',getData)
            .on('click','.search.btn',getData)
            .on('click','.modify',modifyData)
        })


        function getData(){
            let type = $('#_type').val();
            let search = $('#search').val();
            $.ajax({
                url : '{{route('getData')}}',
                data : {
                    type,
                    search,
                    _token : '{{csrf_token()}}'
                },
                method : 'post',
                success : function(e){
                    if(e.length === 2) e = [...e[0],...e[1]];
                    else e = e[0];

                    let text = '';
                    e.forEach(item=>{
                        let name = item['art_name'].split('');
                        let tag = search.split('+');
                        let reg = '';

                        tag.forEach((ele,idx)=>{
                            arr.push({
                                'text':ele,
                                'long':ele.length,
                                'index' : [

                                ]
                            });
                        })

                        for(let i = 0,a = 0; i < name.length;i++){
                            reg += name;
                        }

                        text += `
                        <tr>
                            <td>${item['type']}</td>
                            <td>${name.join('')}</td>
                            <td>${item['name']}</td>
                            <td>${item['price']}</td>
                            <td>
                                    <button class="btn btn-outline-success m-1 modify" data-id="${item['id']}" data-toggle="modal" data-target="#exampleModalCenter">수정</button>

        <button class="btn btn-outline-danger m-1" onclick="location.href='/delete/${item['id']}'">삭제</button>
</td>
                        </tr>`
                    })
                    $('table tbody').html(text);
                },
                onerror : (res)=>console.log(res.response)
            })
        }


        function modifyData(){
            let id = $(this).attr('data-id');

            $.ajax({
                url : '{{route('modal')}}',
                data : {
                    id,
                    _token : '{{csrf_token()}}'
                },
                method : 'post',
                success : function(e){
                    $('#type').val(e.type);
                    $('#id').val(e.id);
                    console.log(e.id);
                    $('#name').val(e.name);
                    $('#art_name').val(e.art_name);
                    $('#price').val(e.price);
                    $('#description').val(e.description);
                }
            })
        }

    </script>
@endsection
@section('contents')
    <div class="d-flex justify-content-center align-items-center flex-column">
        <select name="type" id="_type" class="custom-select w-25" style="margin-top: 100px;">
            <option value="all">전체</option>
            <option value="한국화">한국화</option>
            <option value="회화">회화</option>
            <option value="공예">공예</option>
            <option value="서예">서예</option>
            <option value="조각">조각</option>
        </select>
        <div class="d-flex w-25">
            <input type="text" id="search" class="form-control" placeholder="검색">
            <button class="btn btn-outline-secondary w-25 search">검색</button>
        </div>
        <table class="table w-75 text-center" style="margin-top: 50px;">
            <thead class="thead-light">
            <tr>
                <th>카테고리</th>
                <th>작품 이름</th>
                <th>작가</th>
                <th>가격</th>
                <th>비고</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data['art'] as $item)
<tr>
    <td>{{$item['type']}}</td>
    <td>{{$item['art_name']}}</td>
    <td>{{$item['name']}}</td>
    <td>{{$item['price']}}</td>
    <td class="d-flex justify-content-center">
        <button class="btn btn-outline-success m-1 modify" data-toggle="modal" data-target="#exampleModalCenter" data-id="{{$item['id']}}">수정</button>
        <button class="btn btn-outline-danger m-1" onclick="location.href='{{route('delete',$item['id'])}}'">삭제</button>
    </td>
</tr>

                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('modify')}}" method="POST" enctype="multipart/form-data">
                        @csrf            <input type="text" name="id" class="d-none" id="id">
                        <div class="form-group">
                            <p class="m-0">작품 종류</p>
                            <select name="type" id="type" class="custom-select">
                                <option value="한국화">한국화</option>
                                <option value="회화">회화</option>
                                <option value="공예" selected>공예</option>
                                <option value="서예">서예</option>
                                <option value="조각">조각</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p class="m-0">작품 이름</p>
                            <input type="text" class="form-control" name="art_name" id="art_name" required>
                        </div>
                        <div class="form-group">
                            <p class="m-0">작가</p>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <p class="m-0">description</p>
                            <input type="text" class="form-control" name="description" id="description" required>
                        </div>
                        <div class="form-group">
                            <p class="m-0">price</p>
                            <input type="number" class="form-control" name="price" id="price" required>
                        </div>
                        <div class="form-group">
                            <p class="m-0">작품 사진</p>
                            <input type="file" class="form-control-file" name="product_img" id="product_img" accept=".jpeg, .png, .jpg ">
                        </div>
                        <button class="btn btn-outline-info" type="submit">수정하기</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
