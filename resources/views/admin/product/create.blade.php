<!DOCTYPE html>
<html>
    <head>
        <title>商品追加フォーム</title>
    </head>
    <body>
        <h1>商品追加フォーム</h1>
        <form action="/product/store" method="post">
            @csrf
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
            <div>
                <label for="url">URL</label>
                <input type="text"　id="url" name="url">
            </div>
            <div>
                <label for="image_url">画像URL</label>
                <input type="image_url"　id="image_url" name="image_url">
            </div>
            <input type="submit" value="送信">
        </form>
        <a href="/product">商品一覧</a>
    </body>
</html>