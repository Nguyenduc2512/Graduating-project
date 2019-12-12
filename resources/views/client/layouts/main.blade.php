<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="csrf-token" content="{{ csrf_token() }}"><!-- style -->
    @include('client/layouts/style')
    <title>Auth Shoes</title>
</head>

<body>
    <!-- header -->
    @include('client/layouts/main-header')
    <!-- slider -->

    @yield('content')
    <div class="w3-container  w3-center">
    <div class="w3-row w3-card-4 w3-grey w3-round-large w3-border comparePanle w3-margin-top">
        <div class="w3-row">
            <div class="w3-col l9 m8 s6 w3-margin-top">
                <h4 style="color: white">Đã thêm sản phẩm so sánh</h4>
            </div>
            <div class="w3-col l3 m4 s6 w3-margin-top">
                 
                <button class="w3-btn w3-round-small w3-white w3-border notActive cmprBtn" disabled>So sánh</button>
            </div>
        </div>
        <div class=" titleMargin w3-container comparePan">
        </div>
    </div>
</div>
<!--end of preview panel-->

<!-- comparision popup-->
<div id="id01" class="w3-animate-zoom w3-white w3-modal modPos">
    <div class="w3-container">
        <a style="font-size: 50px" onclick="document.getElementById('id01').style.display='none'"
            class="whiteFont w3-padding w3-closebtn closeBtn">×</a>
    </div>
    <div class="w3-row contentPop w3-margin-top">

    </div>

</div>
<!--end of comparision popup-->

<!--  warning model  -->
<div id="WarningModal" class="w3-modal">
    <div class="w3-modal-content warningModal">
        <header class="w3-container w3-teal">
            <h3><span>⚠</span> Ôi không!</h3>
        </header>
        <div class="w3-container">
            <h4 style="color: white">Tối đa ba sản phẩm được phép so sánh</h4>
        </div>
        <div class="w3-container w3-right-align">
            <button id="warningModalClose" onclick="document.getElementById('id01').style.display='none'"
                class="w3-btn w3-hexagonBlue w3-margin-bottom  ">Ok</button>
        </div>
    </div>
</div>

    <!-- footer -->
    @include('client/layouts/footer')

    <!-- script -->
    @include('client/layouts/script')
</body>

</html>
