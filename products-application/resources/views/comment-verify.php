<!DOCTYPE html>
<html>
    <head>
        <title>Item and comment display</title>
        <style>
            body {
                background-color: #444;
                padding: 20px;
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
        </style>
    </head>
    <body>
        <div class="comment_container">
            <text class="comment_header">Comments</text><br>
            <?php
                use App\Models\Comment;
                use App\Models\Product;

                $products = Product::all();
                $comments = json_decode(Comment::all(), true);

                $comments = array_filter($comments, function ($comment) {
                    return $comment["verified"] == 0;
                });
                
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
                    echo '<form action="api/updateComment" method="post">';
                    echo '<input type="hidden" id="comment_id" name="comment_id" value="' . $comment["id"] . '">';
                    echo '<input style="font-size: 20px;" type="submit" value="Verify">';
                    echo '</form>';
                    echo '<form action="api/eraseComment" method="post">';
                    echo '<input type="hidden" id="comment_id" name="comment_id" value="' . $comment["id"] . '">';
                    echo '<input style="font-size: 20px;" type="submit" value="Delete">';
                    echo '</form>';
                    echo '</div>';
                }
            ?>
        </div>
        <div class="form_container">
            <form action="api/auth/logout" method="post">
                <input style="font-size: 25px;" type="submit" value="Log out">
            </form>
        </div>
    </body>
</html>