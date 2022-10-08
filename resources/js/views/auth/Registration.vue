<template>
  <div class="register-card-body">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary text-center" style="border-color: white;">
      <div class="card-header text-center">
        <a href="" class="h1"><b>新規会員登録</b></a>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="row mb-2">
            <div class="col-6">
              <div class="icheck-primary">
                <input type="checkbox" id="medical">
                <label for="medical">
                  医療法人
                </label>
              </div>
            </div>
            <div class="col-6">
                <div class="icheck-primary">
                  <input type="checkbox" id="solo">
                  <label for="solo">
                    個人事業主
                  </label>
                </div>
            </div>
          </div>
          <div class="form-group row">
            <p for="inputEmail3" class="col-sm-4 col-form-label required">法人名/医院名</p>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <p for="inputEmail3" class="col-sm-4 col-form-label required">医院数</p>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <p for="inputEmail3" class="col-sm-4 col-form-label required">住所</p>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <p for="inputEmail3" class="col-sm-4 col-form-label required">理事長名/院長名</p>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <p for="inputEmail3" class="col-sm-4 col-form-label required">決算月</p>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <p for="inputEmail3" class="col-sm-4 col-form-label required">メールアドレス（経営者ID）</p>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <p for="inputEmail3" class="col-sm-4 col-form-label required">パスワード</p>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <p for="inputEmail3" class="col-sm-4 col-form-label required">パスワード確認</p>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <p for="inputEmail3" class="col-sm-4 col-form-label required">売上規模（法人全体）</p>
            <div class="col-sm-2">
              <p class="" >
                  年商は
              </p>
            </div>
            <div class="col-sm-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                <label class="form-check-label" for="flexCheckDefault1">
                  5,000万円未満
                </label>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                <label class="form-check-label" for="flexCheckDefault2">
                  1億円未満
                </label>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                <label class="form-check-label" for="flexCheckDefault3">
                  2億円未満
                </label>
              </div>
            </div>
          </div>
          <div class="row second-row">
            <div class="col-sm-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                <label class="form-check-label" for="flexCheckDefault4">
                  3億円未満
                </label>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                <label class="form-check-label" for="flexCheckDefault5">
                  4億円未満
                </label>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                <label class="form-check-label" for="flexCheckDefault6">
                  5億円未満
                </label>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                <label class="form-check-label" for="flexCheckDefault7">
                  5億円以上
                </label>
              </div>
            </div>
          </div>

          <div class="col-4" style="
            margin-left: 32%;
          ">
              <button type="submit" class="btn btn-primary btn-block" >入力内容確認</button>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  </template>
<style>
  .register-card-body{
    position: absolute;
    top: 20%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, 25%);
    width:720px;
    margin-top: -10%;
    color: black;
  }
  .required:after {
    content:" *";
    color: blue;
  }
  .second-row{
    margin-left: 33%;
    width: 98%;
    margin-bottom: 10px;
  }
</style>
  <script>
  export default {

  }
  </script>