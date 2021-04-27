
<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet"type="text/css"href="style.css">
    </head>
    <body>
        <?php 
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
        $stmt = $pdo->query("select*from 4each_keijiban");
        
        ?>
        
        
        
        <header>
            <div>
            <img src="4eachblog_logo.jpg">
            </div>
            
            <div>
            <ul class="aaa">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
            </div>
        </header>
        <main>
            <div class=left>
                
                <h1>プログラミングに役立つ書籍</h1>
                <form class=first method="post" action="insert.php">
                    <h3 class=nyuryoku>入力フォーム</h3>
            <div class=handlename>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" name="handlename">
            </div>
                    
            <div class=title>
                <label>タイトル</label>
                <br>
                <input type="text" name="title">
            </div>
             
            <div class = comments>
                <label>コメント</label>
                <br>
                <textarea name="comments" rows="7" cols="35"></textarea>
            </div>
            
            <div class=submit>
             <input type="submit" value="投稿する">
            </div>           
            
    　　　　</form>
            
                <form class=second>
                    
                    <?php
                    while($row = $stmt->fetch()){
                    echo"<div class='kiji'>"; 
                     echo"<h3>".$row['title']."</h3>";
                    echo"<div class='contents'>";
                    echo $row['comments'];
                            echo"<div class='handlename'>posted by".$row['handlename']."</div>";
                        echo"</div>";
                        echo"</div>";
                    }
                        ?>
                    
                    
                </form>
                
                
            </div>
            
              <div class="right">
                <h2>人気の記事</h2>
                    <ul class="bbb">
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ Top5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                
                <h2>オススメリンク</h2>
                    <ul class="bbb">
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                
                <h2>カテゴリ</h2>
                    <ul class="bbb">
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                
            </div>
        </main>
        
        <footer>
            <div class="last">copyright©internous｜4each blog the which provides A to Z about programing.
            </div>
        </footer> 
    </body>

</html>