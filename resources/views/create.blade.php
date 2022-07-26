@extends('header')
<script>
    function mouse(){
        let input = $('input');
        input.each(function(){
            let val = $(this).val();
            if(!val) {
                alert(`${this.name}항목이 누락되었습니다.`);
                $(this).focus();
                return false;
            }
        });

    }
    function reset(){
        $('input').val('');
    }
</script>

@section('contents')
    <div class="flex-column d-flex justify-content-center align-items-center h-100">
        <form class="flex-column d-flex" action="{{route('create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <p class="m-0">작품 종류</p>
                <select name="type" id="type" class="custom-select">
                    <option value="한국화">한국화</option>
                    <option value="회화">회화</option>
                    <option value="공예">공예</option>
                    <option value="서예">서예</option>
                    <option value="조각">조각</option>
                </select>
            </div>
            <div class="form-group">
                <p class="m-0">작품 이름</p>
                <input type="text" class="form-control" name="art_name" required>
            </div>
            <div class="form-group">
                <p class="m-0">작가</p>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <p class="m-0">description</p>
                <input type="text" class="form-control" name="description" required>
            </div>
            <div class="form-group">
                <p class="m-0">price</p>
                <input type="number" class="form-control" name="price" required>
            </div>
            <div class="form-group">
                <p class="m-0">작품 사진</p>
                <input type="file" class="form-control-file" name="product_img" required accept=".jpeg, .png, .jpg ">
            </div>
            <button class="btn btn-outline-info" type="button" onclick="mouse()">추가하기</button>
            <button class="btn btn-outline-info" type="button" onclick="reset()">다시 작성하기</button>
            <button class="btn btn-outline-info d-none" id="submit" type="submit">추가하기</button>
        </form>
    </div>
@endsection
