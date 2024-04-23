<!DOCTYPE html>
<html>
    <head>
        <title>Item and comment display</title>
        <style>
            body {
                background-color: #444;
                padding: 20px;
            }
            .grid_container {
                display: grid;
                grid-template-columns: repeat(3, 420px);
                gap: 20px;
                margin-bottom: 40px;
            }
            .content_title_text {
                color: white;
                font-size: 24px;
            }
            .content_desc_text {
                color: white;
                font-size: 16px;
            }
            .product_box {
                background-color: #222;
                height: 500px;
                width: 400px;
                padding: 10px;
            }
            .comment_container {
                background-color: #222;
                width: 100%;
                padding: 10px;
                padding-top: 30px;
                padding-bottom: 30px;
                margin-bottom: 30px;
            }
            .comment_box {
                background-color: #222;
                margin-bottom: 20px;
            }
            .comment_header {
                color: white;
                font-size: 28px;
            }
            .comment_content {
                color: white;
                font-size: 18px;
            }
            .form_container {
                background-color: #222;
                padding: 30px;
                margin-bottom: 30px;
            }
            .form_label {
                color: white;
                font-size: 22px;
            }
            .form_title {
                color: white;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <text class="form_title">Items</text><br>
        <div class="grid_container">
            <?php
                use App\Models\Comment;
                use App\Models\Product;

                $products = Product::all();

                $count = 0;
                
                foreach ($products as $product) {
                    echo '<div class="product_box">';
                    echo '<text class="content_title_text">' . $product["name"] . '</text><br>';
                    echo '<img src="img/' . $product["image"] . '" style="height: 300px; width: 300px;"><br>';
                    echo '<text class="content_desc_text">' . $product["desc"] . '</text>';
                    echo '</div>';

                    $count++;

                    if ($count > 8) {
                        break;
                    }
                }
            ?>
        </div>
        <div class="comment_container">
            <text class="form_title">Comments</text><br>
            <?php
                $comments = Comment::all();
                
                foreach ($comments as $comment) {

                    $item = "";

                    foreach ($products as $product) {
                        if ($product["id"] === $comment["product_id"]) {
                            $item = $product["name"];
                            break;
                        }
                    }

                    echo '<div class="comment_box">';
                    echo '<text class="comment_header">For: ' . $item . ', by: ' . $comment["name"] . ', at: ' . $comment["email"] . ' <br>';
                    echo '<text class="comment_content"> ' . $comment["content"] . '</text>';
                    echo '</div>';
                }
            ?>
        </div>
        <div class="form_container">
            <text class="form_title">Post a comment</text><br>
            <form action="api/postComment" method="post">
                <label for="product"><text class="form_label">Product:  </text></label>
                <select id="product" name="product">
                    <?php
                        foreach ($products as $product) {
                            echo '<option value=' . $product["id"] . '>' . $product["name"] . '</option>';
                        }
                    ?>
                </select><br>
                <label for="name"><text class="form_label">Name:  </text></label>
                <input type="text" id="name" name="name"><br>
                <label for="email"><text class="form_label">Email:  </text></label>
                <input type="text" id="email" name="email"><br>
                <label for="content"><text class="form_label">Comment:  </text></label><br>
                <textarea style="height: 200px; width: 500px;" id="content" name="content"></textarea><br>
                <input style="font-size: 25px;" type="submit" value="Post comment">
            </form>
        </div>
        <div class="form_container">
            <form>
                <text class="form_title">Are you an admin?</text><br>
                <text class="form_label">Stop procrastinating and review the comments for publishing!</text><br>
                <label for="username"><text class="form_label">Admin username:  </text></label>
                <input type="text" id="username" name="username"><br>
                <label for="password"><text class="form_label">Admin password:  </text></label>
                <input type="text" id="password" name="password"><br>
                <input style="font-size: 25px;" type="submit" value="Go to admin page">
            </form>
        </div>
    </body>
</html>