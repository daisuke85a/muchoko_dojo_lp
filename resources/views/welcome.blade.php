<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>むちょこ道場</title>
    <meta name="description"
        content="むちょこ道場では、フリーランスになるためのお手伝いをしております。見積もりの提出体験などもできます。基礎力・チーム開発力・実務力をテーマとした３つの課題を通して、フリーランスのエンジニアとして、必要なスキルを体感していただくワークショップになります。">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">

    <style>
        .top {
            background-image: url("{{ asset('image/first_view.png') }}");
            width: 1000px;
            height: 500px;
        }

        .top p {
            font-size: 35px;
            font-family: "MS Gothic";
            color: rgb(0, 0, 0);
            line-height: 1.2;
            position: absolute;
            left: 73px;
            top: 112px;
            z-index: 63;
        }

        .top h1 {
            font-size: 78px;
            font-family: "MS Gothic";

            color: rgb(0, 0, 0);
            line-height: 1.2;
            -moz-transform: matrix(1.28082624695255, 0, 0, 1.28082624695255, 0, 0);
            -webkit-transform: matrix(1.28082624695255, 0, 0, 1.28082624695255, 0, 0);
            -ms-transform: matrix(1.28082624695255, 0, 0, 1.28082624695255, 0, 0);
            position: absolute;
            left: 265.371px;
            top: 212.882px;
            z-index: 62;
        }

        .about {
            background-image: url("{{ asset('image/about.png') }}");
            width: 1000px;
            height: 860px;
        }

        .about h2 {
            font-size: 35px;
            font-family: "MS Gothic";
            color: rgb(255, 255, 255);
            line-height: 1.2;
            text-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);
            -moz-transform: matrix(1.974806587511, 0, 0, 1.974806587511, 0, 0);
            -webkit-transform: matrix(1.974806587511, 0, 0, 1.974806587511, 0, 0);
            -ms-transform: matrix(1.974806587511, 0, 0, 1.974806587511, 0, 0);
            position: absolute;
            left: 88.212px;
            top: 553px;
            z-index: 56;
        }

        .about p {
            font-size: 35px;
            font-family: "MS Gothic";
            color: rgb(0, 0, 0);
            line-height: 1.55;
            position: absolute;
            left: 133px;
            top: 665.805px;
            z-index: 55;
        }


        .task {
            display: flex;
            justify-content: space-evenly;
        }

        .task div:nth-child(1) p {
            font-size: 50px;
            font-family: "MS Gothic";
            color: rgb(255, 255, 255);
            line-height: 1.2;
            text-align: center;
            text-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);
            position: absolute;
            left: 97.101px;
            top: 1285.15px;
            z-index: 51;
        }

        .task div:nth-child(1) img {
            /* background-image: url("基礎力の写真.png"); */
            position: absolute;
            left: 45px;
            top: 1087px;
            width: 274px;
            height: 191px;
            z-index: 52;
        }

        .task div:nth-child(2) p {
            font-size: 50px;
            font-family: "MS Gothic";
            color: rgb(255, 255, 255);
            line-height: 1.2;
            text-align: center;
            text-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);
            position: absolute;
            left: 345.951px;
            top: 1285.15px;
            z-index: 49;
        }

        .task div:nth-child(2) img {
            position: absolute;
            left: 367px;
            top: 1087px;
            width: 289px;
            height: 188px;
            z-index: 50;
        }

        .task div:nth-child(3) p {
            font-size: 50px;
            font-family: "MS Gothic";
            color: rgb(255, 255, 255);
            line-height: 1.2;
            text-align: center;
            text-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);
            position: absolute;
            left: 742.75px;
            top: 1284.45px;
            z-index: 47;
        }

        .task div:nth-child(3) img {
            position: absolute;
            left: 683px;
            top: 1087px;
            width: 276px;
            height: 195px;
            z-index: 48;
        }

        .goal {
            background-image: url("{{ asset('image/goal.png') }}");
            width: 1000px;
            height: 745px;
        }

        .goal h2 {
            font-size: 35px;
            font-family: "MS Gothic";
            color: rgb(192, 237, 245);
            line-height: 1.2;
            text-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);
            -moz-transform: matrix(3.53861246170494, 9.85655391869268e-16, 0, 3.79567598144718, 0, 0);
            -webkit-transform: matrix(3.53861246170494, 9.85655391869268e-16, 0, 3.79567598144718, 0, 0);
            -ms-transform: matrix(3.53861246170494, 9.85655391869268e-16, 0, 3.79567598144718, 0, 0);
            position: absolute;
            left: 464.71px;
            top: 1605.541px;
            z-index: 41;
        }

        .goal p {
            font-size: 35px;
            font-family: "MS Gothic";
            color: rgb(0, 0, 0);
            line-height: 1.2;
            -moz-transform: matrix(1.15621606347031, 3.2205578018461e-16, 0, 1.24020971184936, 0, 0);
            -webkit-transform: matrix(1.15621606347031, 3.2205578018461e-16, 0, 1.24020971184936, 0, 0);
            -ms-transform: matrix(1.15621606347031, 3.2205578018461e-16, 0, 1.24020971184936, 0, 0);
            position: absolute;
            left: 169.417px;
            top: 1844.959px;
            z-index: 40;
        }

        .apply {
            background-image: url("{{ asset('image/apply.png') }}");
            width: 1000px;
            height: 1137px;
        }

        .apply h2 {
            font-size: 29.266px;
            font-family: "MS Gothic";
            color: rgb(0, 0, 0);
            line-height: 1.2;
            -moz-transform: matrix(2.26291468657062, 5.76741728279482e-16, 0, 2.22098386879125, 0, 0);
            -webkit-transform: matrix(2.26291468657062, 5.76741728279482e-16, 0, 2.22098386879125, 0, 0);
            -ms-transform: matrix(2.26291468657062, 5.76741728279482e-16, 0, 2.22098386879125, 0, 0);
            position: absolute;
            left: 442.177px;
            top: 2174.144px;
            z-index: 34;
        }

        .apply p {
            font-size: 35px;
            font-family: "MS Gothic";
            color: rgb(0, 0, 0);
            line-height: 1.55;
            -moz-transform: matrix(1.35457112857232, 0, 0, 1.35457112857231, 0, 0);
            -webkit-transform: matrix(1.35457112857232, 0, 0, 1.35457112857231, 0, 0);
            -ms-transform: matrix(1.35457112857232, 0, 0, 1.35457112857231, 0, 0);
            position: absolute;
            left: 440.811px;
            top: 2335.52px;
            z-index: 33;
        }

        .apply p span {
            font-size: 70px;
        }

        .apply .apply-button {
            background-image: url("{{ asset('image/button_apply.png') }}");
            border-radius: 35px;
            background-size: auto auto;
            /* background-color: rgb(103, 212, 231); */
            position: absolute;
            left: 461px;
            top: 2604px;
            width: 479px;
            height: 127px;
            display: flex;
            justify-content: center;
            /* z-index: 29; */
        }

        .apply .apply-button a {
            /* background-image: url("{{ asset('image/button_apply.png') }}"); */
            font-size: 35px;
            font-family: "MS Gothic";
            color: rgb(255, 255, 255);
            line-height: 1.2;
            text-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);
            -moz-transform: matrix(1.68627859551162, 0, 0, 1.68627859551163, 0, 0);
            -webkit-transform: matrix(1.68627859551162, 0, 0, 1.68627859551163, 0, 0);
            -ms-transform: matrix(1.68627859551162, 0, 0, 1.68627859551163, 0, 0);
            display: block;
            align-self: center;
            text-decoration: none;
            /* position: absolute; */
            /* left: 640.141px; */
            /* top: 2654.335px; */
            z-index: 99;
        }

        footer {
            background-image: url("{{ asset('image/footer.png') }}");
            width: 1000px;
            height: 147px;
        }

    </style>
</head>

<body>
    {{-- <img src="{{ asset('image/firstView.png') }}" alt=""> --}}
    <div class="top">
        <p class="top-p">フリーランスになるためのお手伝い企画</p>
        <h1>むちょこ道場</h1>
    </div>
    <div class="about">
        <h2>About</h2>
        <p>むちょこ道場では、フリーランスになるための<br />お手伝いをしております。<br />
            見積もりの提出体験などもできます。<br />
            基礎力・チーム開発力・実務力をテーマとし<br />た３つの課題を通して、フリーランスのエン<br />ジニアとして、必要なスキルを体感していた<br />だくワークショップになります。</p>
        <div class="task">
            <div>
                <img src="{{ asset('image/about_basic.png') }}" alt="基礎力">
                <p>基礎力</p>
            </div>
            <div>
                <img src="{{ asset('image/about_team.png') }}" alt="チーム開発力">
                <p>チーム開発力</p>
            </div>
            <div>
                <img src="{{ asset('image/about_practical.png') }}" alt="実務力">
                <p>実務力</p>
            </div>
        </div>
    </div>
    <div class="goal">
        <h2>目標</h2>
        <div>
            <p>フリーランスとして駆け出すために必要な<br />武器を揃えること！</p>
        </div>
    </div>
    <div class="apply">
        <h2>お申し込み</h2>
        <p>費用は、<span>50,000円</span>です。<br />
            お申し込みの方は、こちらから<br />決済にお進みください</p>
        <div class="apply-button">
            <a href="/apply">お申込み</a>
        </div>
        <a href="">お問い合わせ<img src="" alt=""></a>
    </div>

    </div>
    <footer>©2019 むちょこ道場</footer>
</body>

</html>
