<template>
<div class="login-box" style="
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, 25%);">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary text-center" style="border-color: white;">
    <div class="card-header text-center">
      <a href="" class="h1"><b>ログイン</b></a>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="メール">
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="パスワード">
        </div>
        <div class="row" style="
          align-items: center;
          display: flex;
          justify-content: center;
      ">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                ログイン情報を保持する
              </label>
            </div>
          </div>

        </div>
        <div class="col-4" style="
          margin-left: 32%;
        ">
            <button type="submit" class="btn btn-primary btn-block" >ログイン</button>
        </div>
      </form>
      <p class="mb-4 mt-3">
        <a href="forgot-password.html" style="color: gray;">＞ID・パスワードを忘れた方</a>
      </p>
      <label for="remember" class="text-center">
        新規会員登録はこちら
      </label>
      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary" style="width: 50%;margin-left: 25%;">
          新規会員登録
        </a>
      </div>
      <!-- /.social-auth-links -->


      <p class="mb-0">
        <a href="" class="text-center" style="color: gray;">お問い合わせ</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</template>
<style>
  /* .login-box{
    position: absolute;
    top: 20%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, 25%);
    width:720px;
    margin-top: -10%;
  } */

</style>
<script>
export default {

}
</script>