@foreach($productSearch as $ps)
<div class="col-md-3 col-6">
    <div class="p_nd">
        <a href="#"> <img src="{{$ps->picture}}" width="100%" alt=""></a>
        <div class="nd_hover">
            <a href="#"><i class="fas fa-cart-plus"></i></a>
            <a href="#"><i class="far fa-eye"></i></a>
            <a href="#"> <i class="fas fa-less-than-equal"></i></a>
        </div>
        <a href="#">
            <h3>{{$ps->name}}</h3>
        </a>
        <p>{{$ps->price}} đ</p>
    </div>
</div>
@endforeach
<div class="col-12">
    <ul class="pagination" style="float: right;">
        {{ $productSearch->links() }}
    </ul>
</div>