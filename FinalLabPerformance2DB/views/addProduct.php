<html>
    <head>
        <title>Add Product</title>
    </head>
    <body>
        <form method="POST" action="../controllers/addProductCheck.php" enctype="">
            <fieldset>
                <legend>Add Product</legend>
                Name: <br>
                <input type="text" name="name" value="" /> <br>
                Buying Price: <br>
                <input type="number" name="buy" value="" /> <br>
                Selling Price: <br>
                <input type="number" name="sell" value="" /> <br>

                <hr>
                <input type="checkbox"> Display <br> <hr>
                <input type="submit" name="submit" value="Save" />
            </fieldset>
        </form>
    </body>
</html>