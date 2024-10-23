<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>kadai_web_app</title>
    </head>
    <body>
        <h2>入力内容をご確認ください。</h2>
        
        <table border="1">
            <tr>
                <td>項目</td>
                <td>入力内容</td>
            </tr>
            <tr>
                <td>社員名</td>
                <td><?php echo $_POST["user-name"] ?></td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><?php echo $_POST["user-age"] ?></td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td><?php echo $_POST["category"] ?></td>
            </tr>
        </table>
        <button id="confirm" onclick="location.href='complete.php';">確定</button>
        <button id="back" onclick="history.back();">キャンセル</button>
    </body>
</html>