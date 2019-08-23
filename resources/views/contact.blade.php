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
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif

            </div>

            <div class="form-group">
                <label for="email">返信先メールアドレス</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="例：muchoko@example.com">
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

            </div>

            <div class="form-group">
                <label for="contact">お問い合わせ内容</label>
                <textarea class="form-control" id="contact" name="contact" rows="10"></textarea>
                @if ($errors->has('contact'))
                <span class="help-block">
                    <strong>{{ $errors->first('contact') }}</strong>
                </span>
                @endif

            </div>

            <button class="btn btn-primary">お問い合わせ</button>
        </div>
    </form>

</body>

</html>
