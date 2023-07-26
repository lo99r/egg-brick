<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jame->id = $_POST["id"]
    $jame->password = $_POST["pwd"]
    $jason = fopen("user.json", "ra+");
    //$jasoner = fopen("user.json", "ra+");
    $User = $json_encode($jame);
    fread($jason, $hisss);
    json_decode($hisss, $pan)
    $imaze = sizeof($pan)
    for ($i=0; $i < $imaze; $i++) { 
        # code...
        if ($pan[$i]->id == $jame->id) {
            # code...
            if ($pan[$i]->password == $jame->password) {
                # code...
                echo "login 완료"
                $_COOKIE["user"] = $User
                echo "<script>location.href = \'hi.php\'</script>"
            }
        }
    }
</body>
</html>