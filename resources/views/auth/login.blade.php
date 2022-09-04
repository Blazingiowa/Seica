<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログインページ</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 500" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<!-- partial:index.partial.html -->
<!--
  This was created based on the Dribble shot by Deepak Yadav that you can find at https://goo.gl/XRALsw
  I'm @hk95 on GitHub. Feel free to message me anytime.
-->

<section class="user">
    <div class="user_options-container">
        <div class="user_options-text">
            <div class="user_options-unregistered">
                <h2 class="user_unregistered-title">アカウントは持っていますか？</h2>
                <p class="user_unregistered-text">アカウントが無い場合は新しく作りましょう！</p>
                <button class="user_unregistered-signup" id="signup-button">新規作成</button>
            </div>

            <div class="user_options-registered">
                <h2 class="user_registered-title">アカウントが既にありますか？</h2>
                <p class="user_registered-text">ログインしてすぐに使い始めましょう！</p>
                <button class="user_registered-login" id="login-button">ログイン</button>
            </div>
        </div>

        <div class="user_options-forms" id="user_options-forms">
            <div class="user_forms-login">
                <h2 class="forms_title">ログイン</h2>
                <form class="forms_form" method="post" action="{{ route('login') }}">
                    @csrf
                    <fieldset class="forms_fieldset">
                        <div class="forms_field">
                            <input id="email" type="email"
                                   class="forms_field-input @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="forms_field">
                            <input id="password" type="password"
                                   class="forms_field-input @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </fieldset>
                    <div class="forms_buttons">
                        <button type="button" class="forms_buttons-forgot">パスワードを忘れましたか?</button>
                        <input type="submit" value="ログイン" class="forms_buttons-action">
                    </div>
                </form>
            </div>
            <div class="user_forms-signup">
                <h2 class="forms_title">新規作成</h2>
                <form class="forms_form" method="post" action="{{ route('register') }}">
                    @csrf
                    <fieldset class="forms_fieldset">
                        <div class="forms_field">
                            <input id="name" type="text" placeholder="名前"
                                   class="forms_field-input @error('name') is-invalid @enderror" name="name"
                                   value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="forms_field">
                            <input id="email" type="email" placeholder="メールアドレス"
                                   class="forms_field-input @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="forms_field">

                            <input id="password" placeholder="パスワード" type="password"
                                   class="forms_field-input @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="forms_field">

                            <input id="password-confirm" placeholder="パスワード 確認" type="password"
                                   class="forms_field-input" name="password_confirmation" required
                                   autocomplete="new-password">

                        </div>
                    </fieldset>
                    <div class="forms_buttons">
                        <input type="submit" value="新規登録" class="forms_buttons-action">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- partial -->
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
