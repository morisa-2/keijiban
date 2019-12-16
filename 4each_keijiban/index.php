<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4each 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<a href="index.php"><img src="4eachblog_logo.jpg"></a>
    
 <body>
  <?php
     mb_internal_encoding("UTF-8");
     $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","")
     
   ?>
     
  <header>
      
   <ul>
    <li>トップ</li>
    <li>プロフィール</li>
    <li>4eachについて</li>
    <li>登録フォーム</li>
    <li>問い合わせ</li>
    <li>その他</li>
   </ul>
  </header>
     
  <main>
   <div class="main-container">
   <div class="left">   
    <h1>入力フォーム</h1>
<form method="post" action="insert.php">
 <div>
   <label>ハンドルネーム</label> 
   <br>
   <input type="text" class="text" name="handlename" size="30">
 </div>
 <div>    
   <label>タイトル</label>
   <br>
   <input type="text" class="text" name="title" size="30">
 </div>
 <div>
    <label>コメント</label>
    <br>
    <textarea cols="30" rows="7" name="comments"></textarea>
    </div>
 <div>
  <input type="submit" class="submit" value="送信する">
 </div>
 </form>
</div>
    
       
   <div class="right">
    <p>人気の記事</p>
    <ul>
    <li>PHPオススメ本</li>
    <li>PHP　MyAdminの使い方</li>
    <li>いま人気のエディタTop5</li>
    <li>HTMLの基礎</li>
    </ul>
    
    <p>おすすめリンク</p>
    <ul>
    <li>インターノウス株式会社</li>
    <li>XAMPPのダウンロード方法</li>
    <li>Eclipseのダウンロード方法</li>
    <li>Braketsのダウンロード方法</li>
    </ul>
    
    <p>カテゴリ</p>
    <ul>
    <li>HTML</li>
    <li>PHP</li>
    <li>MySQL</li>
    <li>JavaScript</li>
    </ul>
    </div>
      </div>
  </main>
     
     <footer>
     Copyright all right reserved internous 2015-2019
     </footer>
    </body>