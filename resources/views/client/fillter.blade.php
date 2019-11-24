                                            @if(count($productcate) == 0)

                            Không có sản phẩm thuộc danh mục này!
                            @else
                             <b style="width: 100%;margin-bottom: 20px;font-size: 17px">Tổng số kết quả : {{$productcate->total()}}</b>
                            @foreach($productcate as $pc)
                            <div class="col-md-4 col-6">
                                <div class="p_nd">
                                    <a href="{{route('detail', ['id' => $pc->id])}}"> <img src="{{url('/')}}/{{$pc->picture}}" width="100%" alt=""></a>
                                    <div class="nd_hover">
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                        <a href="{{route('detail', ['id' => $pc->id])}}"><i class="far fa-eye"></i></a>
                                        <a href="#"> <i class="fas fa-less-than-equal"></i></a>
                                    </div>
                                    <a href="{{route('detail', ['id' => $pc->id])}}">
                                        <h3>{{$pc->name}}</h3>
                                    </a>
                                    <p>{{$pc->price}} đ</p>
                                </div>
                            </div>
                            @endforeach 
                            @endif
                            <div class="col-12">
                                <ul class="pagination" style="float: right;">
                                {{ $productcate->links() }}
                                </ul>
                            </div>