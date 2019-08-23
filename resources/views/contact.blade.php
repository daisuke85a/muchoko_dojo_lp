<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>むちょこ道場</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <form action="/contact" method="post">
        {{ csrf_field() }}
        <div class="container py-4">
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="例：むちょこ">
            </div>

            <div class="form-group">
                <label for="email">返信先メールアドレス</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="例：muchoko@example.com">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">お問い合わせ内容</label>
                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"></textarea>
            </div>

            <button class="btn btn-primary">お問い合わせ</button>
        </div>
    </form>

</body>

</html>
