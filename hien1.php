<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
    <form action="">
        <label for="name">Name:</label>
        <input id="name" type="text" name="name">
        <select name="" id="">
            <?php for($i=1; $i <= 30; $i++ ) { ?>
                <option value=""><?php echo $i; ?></option>
            <?php  } ?>
        </select>
        <input type="radio" name="sex" value="1"> Nam
        <input type="radio" name="sex" value="2"> Nữ
        <button>submit</button>
    </form>
</body>
</html>