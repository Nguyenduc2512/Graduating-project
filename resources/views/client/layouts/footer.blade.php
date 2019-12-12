<footer>
        <div class="container">
            <div class="ft">
                <div class="row">
                    <div class="col-md-4">
                        <a href="/"><img src="{{url('/')}}/{{$webs->logo}}" height="100" alt=""></a>
                        <p><i class="fas fa-envelope"></i> Email: <span>{{$webs->email}}</span></p>
                        <p><i class="fas fa-phone-alt"></i> Hotline: <span> {{$webs->hotline}}</span></p>
                    </div>
                    <div class="col-md-3">
                        <p>
                            Shop bán giày online Auth Shoes, {{$webs->address}}
                        </p>
                        <p>+{{$webs->hotline}}</p>
                    </div>
                    <div class="col-md-3">
                        <div class="mn-ft">
                            <ul>
                                <li><a href="{{route('about')}}">Về chúng tôi</a></li>
                                <li><a href="{{route('contact')}}">Liên Hệ</a></li>
                                <li><a href="{{route('contact')}}#map">Bản đồ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <ul>
                            @foreach($category as $cate)
                            <li>
                                <a href="{{route('cate', ['id' => $cate->id])}}">{{$cate->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="end-ft">
            <div class="container">
                <p>Copyright 2019 · Thiết kế và phát triển bởi <a href="{{route('home')}}">Auth Shoes</a> All rights
                    reserved
                </p>
            </div>
        </div>
    </footer>
