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
            }
            .form_label {
                color: white;
                font-size: 22px;
            }
        </style>
    </head>
    <body>
        <div class="grid_container">
            <div class="product_box">
                <text class="content_title_text">white text in a black div 1</text>
            </div>
            <div class="product_box">
                <text class="content_title_text">white text in a black div 2</text>
            </div>
            <div class="product_box">
                <text class="content_title_text">white text in a black div 3</text>
            </div>
            <div class="product_box">
                <text class="content_title_text">white text in a black div 4</text>
            </div>
            <div class="product_box">
                <text class="content_title_text">white text in a black div 5</text>
            </div>
            <div class="product_box">
                <text class="content_title_text">white text in a black div 6</text>
            </div>
            <div class="product_box">
                <text class="content_title_text">white text in a black div 7</text>
            </div>
            <div class="product_box">
                <text class="content_title_text">white text in a black div 8</text>
            </div>
            <div class="product_box">
                <text class="content_title_text">white text in a black div 9</text>
            </div>
        </div>
        <div class="comment_container">
            <div class="comment_box">
                <text class="comment_header">For: Stapler, by: Mike at: mike@mikemail.com</text> <br>
                <text class="comment_content">This is a comment</text>
            </div>
            <div class="comment_box">
                <text class="comment_header">For: Stapler, by: Mike at: mike@mikemail.com</text> <br>
                <text class="comment_content">This is another comment</text>
            </div>
        </div>
        <div class="form_container">
            <form>
                <label for="name"><text class="form_label">Name:  </text></label>
                <input type="text" id="name" name="name"><br>
                <label for="email"><text class="form_label">Email:  </text></label>
                <input type="text" id="email" name="email"><br>
                <label for="content"><text class="form_label">Comment:  </text></label><br>
                <textarea style="height: 200px; width: 500px;" id="content" name="content"></textarea><br>
                <input style="font-size: 25px;" type="submit" value="Post comment">
            </form>
        </div>
    </body>
</html>