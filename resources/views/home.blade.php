<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Jquery</title>
</head>
<body>
<button type="button" class="button-to-click">Button</button>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$('.button-to-click').click(function (e) { 
    e.preventDefault();
    console.log('Button clicked');
});
</script>
</body>
</html>