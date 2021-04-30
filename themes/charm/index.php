<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0">
    <title>charme</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="index.js"></script>
  </head>
  <body>
  <!-- header -->
    <header>
      <a href="#" class="header-logo"><img src="./image/header-logo.png" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
      <ul class="nav-bar">
        <li><a href="index.html">Home</a></li>
        <li><a href="./mypage/mypage.html">Mypage</a></li>
        <li><a href="./category/category.html">Category</a></li>
        <li><a href="./blog/blog.html">Blog</a></li>
      </ul>
    </header>
  <!-- header end -->

  <!-- side bar -->
    <div class="side-bar">
      <div class="login">
        <h2 class="side-bar-title">ログイン</h2>
        <dl class="login-form">
          <dt>ユーザー名</dt>
          <dd><input type="text" name="name" class="text"></dd>
          <dt>パスワード</dt>
          <dd><input type="password" name="password" class="text"></dd>
         </dl>
         <input type="checkbox" name="checkbox">
         <span>ログイン状態を保持<span><br>
         <input type="submit" name="submit" value="新規登録" class="signup">
         <input type="submit" name="submit" value="ログイン" class="login-btn">
        <p><a href="">パスワードをお忘れですか？</a></p>
      </div>

      <div class="serch">
        <h2 class="side-bar-title">検索</h2>
        <div class="serch-form">
          <input type="search" name="search">
          <input type="submit" name="submit" value="検索" class="serch-btn">
        </div>
      </div>

      <div class="category">
        <h2 class="side-bar-title">記事を探す</h2>
        <ul class="menu">
          <li><div class="main_menu">メイクアップ</div>
            <ul class="sub_menu">
              <li><a href="#">ファンデーション</a></li>
              <li><a href="#">下地</a></li>
              <li><a href="#">パウダー</a></li>
              <li><a href="#">アイシャドウ</a></li>
              <li><a href="#">リップ</a></li>
            </ul>
          </li>
          <li><div class="main_menu">スキンケア</div>
            <ul class="sub_menu">
              <li><a href="#">化粧水</a></li>
              <li><a href="#">下地</a></li>
              <li><a href="#">クリーム</a></li>
            </ul>
          </li>
          <li><div class="main_menu">ブランド</div>
            <ul class="sub_menu">
              <li><a href="#">Dior</a></li>
              <li><a href="#">シャネル</a></li>
              <li><a href="#">ポールアンドジョー</a>
              <li><a href="#">ちふれ</a></li>
          </li>
        </ul>
      </div>
  <!-- side bar end -->

  <!-- main -->
    <main>
        <div class="latest-post">
          <h2 class="post-title">最新の投稿</h2>
          <div class="latest-post-box">
            <img src="./image/foundation.jpg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
            <div class="post-category"><span>ファンデーション</span></div>
            <h4>Dior ディオール　フォーエヴァークッション</h4>
            <span>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント
                コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</span>
            <br>
            <br>
            <span>★★★★★</span>
            <br>
            <br>
            <br>
            <div class="icon-account">
              <a href="#"><img src="./image/icon-account.png" alt="アイコン"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
              <a href="#">aya1111</a>
            </div>
           </div>
         </div>

        <div class="container">
          <h2 class="post-title">人気の投稿</h2>
          <div class="box1">
            <img src="./image/foundation.jpg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
            <div class="post-category"><span>ファンデーション</span></div>
            <h4>Dior ディオール　フォーエヴァークッション</h4>
            <span>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント
              コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</span>
            <br>
            <br>
            <span>★★★★★</span>
            <br>
            <br>
            <div class="icon-account-mini">
              <a href="#"><img src="./image/icon-account.png" alt="アイコン"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
              <a href="#">aya1111</a>
            </div>
          </div>

          <div class="box2">
            <img src="./image/foundation.jpg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
            <div class="post-category"><spam>ファンデーション</span></div>
            <h4>Dior ディオール　フォーエヴァークッション</h4>
            <span>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント
            コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</span>
            <br>
            <br>
            <span>★★★★★</span>
            <br>
            <br>
            <div class="icon-account-mini">
              <a href="#"><img src="./image/icon-account.png" alt="アイコン"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
              <a href="#">aya1111</a>
            </div>
          </div>
        </div>
    </main>
  <!-- main end -->
  <!-- footer -->
    <footer>
      <div class="footer">
        <a href="#"><img src="./image/footer-logo.png" alt=""><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Mypage</a></li>
          <li><a href="#">Category</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
    </footer>
  <!-- footer end -->

  </body>
</html>
