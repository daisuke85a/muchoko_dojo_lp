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
    <style>
        .top {
            background-image: url("{{ asset('image/first_view.png') }}");
            width: 1000px;
            height: 500px;
        }

        .about {
            background-image: url("{{ asset('image/about.png') }}");
            width: 1000px;
            height: 860px;
        }

        .task {
            display: flex;
            justify-content: space-evenly;
        }

        .goal {
            background-image: url("{{ asset('image/goal.png') }}");
            width: 1000px;
            height: 745px;
        }

        .apply {
            background-image: url("{{ asset('image/apply.png') }}");
            width: 1000px;
            height: 1137px;
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
        <p>\\フリーランスになるためのお手伝い企画//</p>
        <h1>むちょこ道場</h1>
    </div>
    <div class="about">
        <h2>About</h2>
        <p>むちょこ道場では、フリーランスになるための<br />お手伝いをしております。</p>
        <p>見積もりの提出体験などもできます。</p>
        <p>基礎力・チーム開発力・実務力をテーマとし<br />た３つの課題を通して、フリーランスのエン<br />ジニアとして、必要なスキルを体感していた<br />だくワークショップになります。</p>
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
            <div>\</div>
            <div>フリーランスとして駆け出すために必要な<br />武器を揃えること！</div>
            <div>/</div>
        </div>
    </div>
    <div class="apply">
        <h2>お申し込み</h2>
        <div>
            <p>費用は、<span>50,000円</span>です。</p>
            <p>お申し込みの方は、こちらから<br />決済にお進みください</p>
            <div>
                <a href="/apply"><img src="" alt="">お申込み</a>
            </div>
        </div>
        <div>
            <a href="">お問い合わせ<img src="" alt=""></a>
        </div>

    </div>
    <footer>©2019 むちょこ道場</footer>
</body>

</html>
