<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>kadai_web_app</title>
    </head>
    <body>
        <h2>社員情報入力フォーム</h2>
        <form action="confirm.php" method="post">
            <table>
            <tr>
                <td>社員名</td>
                <td>
                    <input type="text" name="user-name">
                </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>
                    <input type="text" name="user-age">
                </td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td>
                    <select name="category">
                        <option>開発部</option>
                        <option>営業部</option>
                        <option>人事部</option>
                    </select>
                </td>
            </tr>
            </table>
            <input type="submit" value="送信">
        </form>
    </body>
</html>