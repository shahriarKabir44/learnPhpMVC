<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    pgijerpoihre9ghecwqeoihnw rgrhvfkew,mejqh
    <h3>
        <?= $this->params['a'] ?>
    </h3>
    <button onclick="f()">click</button>
</body>
<script>
    //window.onload = f
    function f() {
        console.log('here')
        fetch('/index.php/getUsers', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            }
        })
            .then(res => res.json())
            .then(data => {
                console.log(data);
            })
    }

</script>

</html>