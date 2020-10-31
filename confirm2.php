<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <style>
          #inquiry {
            width: 300px;
            /*text-align:center;*/
            margin: 0 auto;
          }
        </style>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <title>Hello, world!</title>
    </head>
    <body>
    <form action="submit.php" method="post">
      <dl>
        <dt><label for="name">▼お名前</label></dt>
        <dd><?php print(htmlspecialchars($_POST['name'],ENT_QUOTES));?></dd>
        <dt><label for="mail">▼メールアドレス</label></dt>
        <dd><?php print(htmlspecialchars($_POST['mail'],ENT_QUOTES));?></dd>
        <dt><label for="contents">▼内容</label></dt>
        <dd><?php print(htmlspecialchars($_POST['contents'],ENT_QUOTES));?></dd>
      </dl>
      <button type="submit">送信</button>
      <a href="contact.html"><button type="button">戻る</button></a>

      <input type="hidden" name="name" value="<?php print(htmlspecialchars($_POST['name'],ENT_QUOTES));?>">
      <input type="hidden" name="mail" value="<?php print(htmlspecialchars($_POST['mail'],ENT_QUOTES));?>">
      <input type="hidden" name="contents" value="<?php print(htmlspecialchars($_POST['contents'],ENT_QUOTES));?>">
    </form>
    

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>