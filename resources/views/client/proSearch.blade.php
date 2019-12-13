@foreach($productSearch as $ps)
<div class="col-md-3 col-6">
    <div class="p_nd  selectProduct" data-title="{{$ps->id}}" data-id="{{$ps->name}}" data-size="{{$ps->price}}" data-weight="{{ $ps->price }}" data-processor="{{ $ps->description }}" data-brand ="{{ $ps->brand->name }}">
        <a href="{{route('detail', ['id' => $ps->id])}}">
            <img src="{{url('/')}}/{{$ps->picture}}" width="100%" alt="" class="imgFill productImg">
            <div class="nd_hover">
                <a href="{{route('member.add_to_favorite', ['id' => $ps->id])}}"><i
                    class="fas fa-heart"></i></a>
                    <a href="{{route('detail', ['id' => $ps->id])}}"><i class="far fa-eye"></i></a>
                    <a class=" addButtonCircular addToCompare"> <i class="fas fa-less-than-equal"></i></a>
                </div>
                <a href="{{route('detail', ['id' => $ps->id])}}">
                    <h3>{{$ps->name}}</h3>
                </a>
                <p>{{$ps->price}}đ </p>
            </a>
        </div>
    </div>
@endforeach
    <div class="col-12">
        <ul class="pagination" style="float: right;">
            {{ $productSearch->links() }}
        </ul>
    </div>