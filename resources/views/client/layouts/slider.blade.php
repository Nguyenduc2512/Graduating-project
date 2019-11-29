<div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner img-banner">
            <?php $count = 0; ?>
            @foreach($slideshow as $slide)
            <<?php $active = $count === 0 ? "active" : ""; ?> <div class="carousel-item {{$active}}">
                <img class="d-block w-100" src="{{$slide->picture}}">
        </div>
        <?php $count++; ?>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <i class='fas fa-arrow-circle-left'></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <i class='fas fa-arrow-circle-right'></i>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>