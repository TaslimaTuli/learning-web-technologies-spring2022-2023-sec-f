<html>
    <head>
        <title>edit</title>
    </head>
    <body>
        <form method="POST" action="../controllers/editCheck.php" enctype="">
            <fieldset>
                <legend>Edit Product</legend>
                Name: <br>
                <input type="text" name="newName" value="" /> <br>
                Buying Price: <br>
                <input type="number" name="newBuy" value="" /> <br>
                Selling Price: <br><input type="number" name="newSell" value="" /> <br>
                <hr>
                <input type="checkbox"> Display <br> <hr>
                <input type="submit" name="submit" value="Save" />
            </fieldset>
        </form>
    </body>
</html>