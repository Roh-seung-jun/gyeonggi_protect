@extends('header')
@section('style')
    <style>
        .box{width: 150px;height: 60px;border: 1px solid #ccc;text-align: center;display: flex;align-items: center;justify-content: center}
        .active{background-color: #34ce57;}
        .end{background-color: #aaa}
    </style>
@endsection
@section('script')
    <script>
        $(()=>{
            $(document)
            .on('click','.box',clickEvent)
        })

        function clickEvent(){
            if($(this).hasClass('end')) return;
            if($(this).hasClass('active')){
                $(this).removeClass('active');
            }else{
                $(this).addClass('active');
            }
        }

        function view(){
            let start_date = $('#start_date').val()
            let end_date = $('#end_date').val()

            if(!start_date || !end_date) return alert('임차 기간을 선택해주세요');
            $.ajax({
                url : '{{route('getBuild')}}',
                method : 'POST',
                data : {
                    start_date,
                    end_date,
                    _token : '{{csrf_token()}}'
                },
                success: async function (e){
                    await $('.map').html(window.arr);
                    e.forEach((item,idx)=>{
                        $(`.map .build_${item['build_id']} .box[data-type="${item['position']}"]`).addClass('end');
                        console.log(item);
                    })
                    $('._button').html(`
    <button class="btn btn-outline-success submit" onclick="post()">등록</button>
                    `)
                }
            })
        }

        function post(){
            let start_date = $('#start_date').val()
            let end_date = $('#end_date').val()
            let data = [];
            $('.box.active').each((idx,e)=>{
                data.push({'data-type':$(e).attr('data-type'),'data-id':$(e).attr('data-id')});
            })

            $.ajax({
                url : '{{route('post')}}',
                data : {
                    start_date,
                    end_date,
                    data,
                    _token : '{{csrf_token()}}'
                },
                method : 'post',
                success : function(){
                    location.href = '/';
                }
            })

        }

        window.arr = `
    <div class="build_1" style="width: 800px;">
        <div class="d-flex">
            <div class="box" data-type="101" data-id="1">101</div>
            <div class="box" data-type="102" data-id="1">102</div>
            <div class="box" data-type="103" data-id="1">103</div>
            <div class="box" data-type="104" data-id="1">104</div>
            <div class="box" data-type="105" data-id="1">105</div>
            <div class="box" data-type="106" data-id="1">106</div>
            <div class="box" data-type="107" data-id="1">107</div>
            <div class="box" data-type="108" data-id="1">108</div>
            <div class="box" data-type="109" data-id="1">109</div>
            <div class="box" data-type="110" data-id="1">110</div>
        </div>
        <div class="text-center d-flex justify-content-center align-items-center" style="height: 60px;">
            <p class="m-0">복도</p>
        </div>
        <div class="d-flex">
            <div class="box" data-type="120" data-id="1">120</div>
            <div class="box" data-type="119" data-id="1">119</div>
            <div class="box" data-type="118" data-id="1">118</div>
            <div class="box" data-type="117" data-id="1">117</div>
            <div class="box" data-type="116" data-id="1">116</div>
            <div class="box" data-type="115" data-id="1">115</div>
            <div class="box" data-type="114" data-id="1">114</div>
            <div class="box" data-type="113" data-id="1">113</div>
            <div class="box" data-type="112" data-id="1">112</div>
            <div class="box" data-type="111" data-id="1">111</div>
        </div>
    </div>
    <div class="build_2 d-flex" style="width: 800px">
        <div class="">
            <div class="d-flex">
                <div class="box" data-id="2" data-type="101">101</div>
                <div class="box" data-id="2" data-type="102">102</div>
                <div class="box" data-id="2" data-type="103">103</div>
                <div class="box" data-id="2" data-type="104">104</div>
                <div class="box" data-id="2" data-type="105">105</div>
                <div class="box" data-id="2" data-type="106">106</div>
            </div>
            <div class="text-center d-flex justify-content-center align-items-center" style="height: 60px;">
                <p class="m-0">복도</p>
            </div>
            <div class="d-flex">
                <div class="box" data-id="2" data-type="114">114</div>
                <div class="box" data-id="2" data-type="113">113</div>
                <div class="box" data-id="2" data-type="112">112</div>
                <div class="box" data-id="2" data-type="111">111</div>
                <div class="box" data-id="2" data-type="110">110</div>
                <div class="box" data-id="2" data-type="109">109</div>
            </div>
        </div>
        <div class="">
            <div class="box h-50" data-id="2" data-type="107">107</div>
            <div class="box h-50" data-id="2" data-type="108">108</div>
        </div>
    </div>`

    </script>
@endsection
@section('contents')
    <div class="d-flex justify-content-center flex-column align-items-center w-100 h-100">
        <div class="">
            <select id="select" class="custom-select mb-5">
                @foreach($data['build'] as $item)
                <option value="{{$item['id']}}">{{$item['name']}}</option>
                @endforeach
            </select>
            <div class="form-group">
                <p class="m-0">이름</p>
                <input type="text" readonly value="{{auth()->user()['id']}}" class="form-control">
            </div>
            <div class="form-group">
                <p class="m-0">임차기간</p>
                <div class="form-group">
                    <p class="m-0">시작일</p>
                    <input type="date" name="start_date" id="start_date" class="form-control">
                </div>
                <div class="form-group">
                    <p class="m-0">마감일</p>
                    <input type="date" name="end_date" id="end_date" class="form-control">
                </div>
            </div>
        </div>
        <button class="btn btn-outline-success" onclick="view()">조회</button>
        <div class="map">
            <h3>청년관</h3>
            <div class="build_1" style="width: 800px;">
                <div class="d-flex">
                    <div class="box end" data-type="101">101</div>
                    <div class="box end" data-type="102">102</div>
                    <div class="box end" data-type="103">103</div>
                    <div class="box end" data-type="104">104</div>
                    <div class="box end" data-type="105">105</div>
                    <div class="box end" data-type="106">106</div>
                    <div class="box end" data-type="107">107</div>
                    <div class="box end" data-type="108">108</div>
                    <div class="box end" data-type="109">109</div>
                    <div class="box end" data-type="110">110</div>
                </div>
                <div class="text-center d-flex justify-content-center align-items-center" style="height: 60px;">
                    <p class="m-0">복도</p>
                </div>
                <div class="d-flex">
                    <div class="box end" data-type="120">120</div>
                    <div class="box end" data-type="119">119</div>
                    <div class="box end" data-type="118">118</div>
                    <div class="box end" data-type="117">117</div>
                    <div class="box end" data-type="116">116</div>
                    <div class="box end" data-type="115">115</div>
                    <div class="box end" data-type="114">114</div>
                    <div class="box end" data-type="113">113</div>
                    <div class="box end" data-type="112">112</div>
                    <div class="box end" data-type="111">111</div>
                </div>
            </div>
            <h3>미래관</h3>
            <div class="build_2 d-flex" style="width: 800px">
                <div class="">
                    <div class="d-flex">
                        <div class="box end" data-type="101">101</div>
                        <div class="box end" data-type="102">102</div>
                        <div class="box end" data-type="103">103</div>
                        <div class="box end" data-type="104">104</div>
                        <div class="box end" data-type="105">105</div>
                        <div class="box end" data-type="106">106</div>
                    </div>
                    <div class="text-center d-flex justify-content-center align-items-center" style="height: 60px;">
                        <p class="m-0">복도</p>
                    </div>
                    <div class="d-flex">
                        <div class="box end" data-type="114">114</div>
                        <div class="box end" data-type="113">113</div>
                        <div class="box end" data-type="112">112</div>
                        <div class="box end" data-type="111">111</div>
                        <div class="box end" data-type="110">110</div>
                        <div class="box end" data-type="109">109</div>
                    </div>
                </div>
                <div class="">
                    <div class="box end h-50" data-type="107">107</div>
                    <div class="box end h-50" data-type="108">108</div>
                </div>
            </div></div>

        <div class="_button"></div>

    </div>

@endsection
