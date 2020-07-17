<!DOCTYPE html>
<html>
    <head>
        <title>商品追加フォーム</title>
    </head>
    <body>
        <h1>商品追加フォーム</h1>
        <form action="/form.php" method="post">
            <div>
                <label for="product_name">商品名</label>
                <input type="text" id="product_name" name="product_name">
            </div>
            <div>
                <label for="product_explain">商品説明<label>
                <textarea id="product_explain" name="product_explain"></textarea>
            </div>
            <div>
                <label for="price">値段</label>
                <input type="text"　id="price" name="price">
            </div>
            <input type="submit" value="送信">
        </form>
        <p></p>
    </body>
</html>