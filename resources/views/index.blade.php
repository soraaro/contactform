<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
    <div class="container">
      {!! Form::open(['route' => 'confirm', 'method' => 'post']) !!}
          {{ csrf_field() }}
          <div class="form-group row">
            <p class="col-sm-4 col-form-label">お名前<span class="badge badge-danger ml-1">※</span></p>
            <div class="col-sm-8">
              {{ Form::text('fullname[0]', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
              <p class="example">例）山田</p>
            </div>
            <div class="col-sm-8">
              {{ Form::text('fullname[1]', null, ['class' => 'form-control', 'placeholder' => 'First Name']) }}
              <p class="example">例）太郎</p>
            </div>
          </div>
          <div class="form-group row">
            <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">※</span></p>
            <div class="col-sm-8">
              <label>{{ Form::radio('gender', "男性") }}男性</label>
                        <label>{{ Form::radio('gender', "女性") }}女性</label>
            </div>
          </div>
          <div class="form-group row">
            <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">※</span></p>
            <div class="col-sm-8">
              {{ Form::text('email', null, ['class' => 'form-control']) }}
              <p class="example">例）test@example.com</p>
            </div>
          </div>
          <div class="form-group row">
            <p class="col-sm-4 col-form-label">郵便番号<span class="badge badge-danger ml-1">※</span></p>
            <div class="col-sm-8">
              <p class="mqrk">〒</p>
              {{ Form::text('postcode', null, ['class' => 'form-control']) }}
              <p class="example">例）123-4567</p>
            </div>
          </div>
          <div class="form-group row">
            <p class="col-sm-4 col-form-label">住所<span class="badge badge-danger ml-1">※</span></p>
            <div class="col-sm-8">
              {{ Form::text('address', null, ['class' => 'form-control']) }}
              <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
            </div>
          </div>
          <div class="form-group row">
            <p class="col-sm-4 col-form-label">建物名</p>
            <div class="col-sm-8">
              {{ Form::text('building_name', null, ['class' => 'form-control']) }}
              <p class="example">例）千駄ヶ谷マンション101</p>
            </div>
          </div>
          <div class="form-group row">
            <p class="col-sm-4 col-form-label">ご意見<span class="badge badge-danger ml-1">※</span></p>
            <div class="col-sm-8">
              {{ Form::textarea('opinion', null, ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="text-center">
            {{ Form::submit('確認', ['class' => 'btn btn-primary']) }}
          </div>
          {!! Form::close() !!}
      </div>
  </div>
</body>
</html>