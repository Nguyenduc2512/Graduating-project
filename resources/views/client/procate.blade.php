@if(count($productcate) == 0)
Không có sản phẩm thuộc danh mục này!
@else
<b style="width: 100%;margin-bottom: 20px;font-size: 17px">Tổng số kết quả : {{$productcate->total()}}</b>
@foreach($productcate as $pc)
<div class="col-md-4 col-6">
    <div class="p_nd selectProduct" data-title="{{$pc->id}}" data-id="{{ $pc->name}}"
        data-size="{{$pc->category->name}}" data-weight="{{ $pc->price }}" data-processor="{{ $pc->description }}"
        data-brand="{{ $pc->brand->name }}">
        <a href="{{route('detail', ['id' => $pc->id])}}">
            <img src="{{url('/')}}/{{$pc->picture}}" width="100%" alt="" class="imgFill productImg">
        </a>
        <div class="nd_hover">
            <a href="{{route('member.add_to_favorite', ['id' => $pc->id])}}"><i class="fas fa-heart"></i></a>
            <a href="{{route('detail', ['id' => $pc->id])}}"><i class="far fa-eye"></i></a>
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare" style="font-size: 23px;">+</a>
        </div>
        <a>
            <h3>{{$pc->name}}</h3>
        </a>
        <p>{{$pc->price}}đ</p>
    </div>
</div>
@endforeach
@endif
<div class="col-12">
    <ul class="pagination" style="float: right;" class="find">
        {{ $productcate->links() }}
    </ul>
</div>