@extends('header')
@section('style')
    <style>
        .box{width: 100px;height: 60px;border: 1px solid #ccc;text-align: center;display: flex;align-items: center;justify-content: center}
        .active{background-color: #34ce57;}
        .end{background-color: #aaa}
    </style>
@endsection
@section('script')
    <script>
        $(()=>{
            let today = @json(date('Y-m-d'));
            let arr = @json($data['event']);
            let color = @json($data['user']);

            arr.forEach((e,idx)=>{
                let ele = e['position'].split(',');
                ele.forEach((item)=>{
                    $(`.build_${e['build_id']} .box[data-type=${item}]`).css('background-color',`${color.find(ele=> ele.id == e['user_id'])['color']}`);
                })
            })
        })


    </script>
@endsection
@section('contents')
    <div class="d-flex justify-content-center flex-column align-items-center w-100 h-100">
        <div class="d-flex">
            <h1>청년관</h1>

            <div class="build_1" style="width: 800px;">
                <div class="d-flex">
                    <div class="box" data-type="101">101</div>
                    <div class="box" data-type="102">102</div>
                    <div class="box" data-type="103">103</div>
                    <div class="box" data-type="104">104</div>
                    <div class="box" data-type="105">105</div>
                    <div class="box" data-type="106">106</div>
                    <div class="box" data-type="107">107</div>
                    <div class="box" data-type="108">108</div>
                    <div class="box" data-type="109">109</div>
                    <div class="box" data-type="110">110</div>
                </div>
                <div class="text-center d-flex justify-content-center align-items-center" style="height: 60px;">
                    <p class="m-0">복도</p>
                </div>
                <div class="d-flex">
                    <div class="box" data-type="120">120</div>
                    <div class="box" data-type="119">119</div>
                    <div class="box" data-type="118">118</div>
                    <div class="box" data-type="117">117</div>
                    <div class="box" data-type="116">116</div>
                    <div class="box" data-type="115">115</div>
                    <div class="box" data-type="114">114</div>
                    <div class="box" data-type="113">113</div>
                    <div class="box" data-type="112">112</div>
                    <div class="box" data-type="111">111</div>
                </div>
            </div>
                <div class="table">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>색상</th>
                            <th>호수</th>
                            <th>이름</th>
                            <th>임대기간</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['event'] as $item)
                            @if($item['build_id'] == 1)
                            <tr>
                                <td><div style="width: 30px;height: 30px;background-color:{{$item->user->color}}"></div></td>
                                <td>{{$item->position}}</td>
                                <td>{{$item->user->id}}</td>
                                <td>{{$item->start_date}} ~ {{$item->end_date}}</td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        <div class="d-flex w-75" style=" margin-top: 50px;">
            <h1>미래관</h1>
            <div class="build_2 d-flex" style="width: 800px">
                <div class="">
                    <div class="d-flex">
                        <div class="box" data-type="101">101</div>
                        <div class="box" data-type="102">102</div>
                        <div class="box" data-type="103">103</div>
                        <div class="box" data-type="104">104</div>
                        <div class="box" data-type="105">105</div>
                        <div class="box" data-type="106">106</div>
                    </div>
                    <div class="text-center d-flex justify-content-center align-items-center" style="height: 60px;">
                        <p class="m-0">복도</p>
                    </div>
                    <div class="d-flex">
                        <div class="box" data-type="114">114</div>
                        <div class="box" data-type="113">113</div>
                        <div class="box" data-type="112">112</div>
                        <div class="box" data-type="111">111</div>
                        <div class="box" data-type="110">110</div>
                        <div class="box" data-type="109">109</div>
                    </div>
                </div>
                <div class="">
                    <div class="box h-50" data-type="107">107</div>
                    <div class="box h-50" data-type="108">108</div>
                </div>
            </div>
            <div class="table">
                <table class="table">
                    <thead>
                    <tr>
                        <th>색상</th>
                        <th>호수</th>
                        <th>이름</th>
                        <th>임대기간</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['event'] as $item)
                        @if($item['build_id'] == 2)
                            <tr>
                                <td><div style="width: 30px;height: 30px;background-color:{{$item->user->color}}"></div></td>
                                <td>{{$item->position}}</td>
                                <td>{{$item->user->id}}</td>
                                <td>{{$item->start_date}} ~ {{$item->end_date}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>

@endsection
