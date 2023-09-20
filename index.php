<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>aianswers - Home</title>
</head>
<body>
    <br>
<center>
<section class="mb-6">
    <div class="form-outline">
        <h3 style="text-transform:uppercase;"> Ask me anything</h3>
    </div>

<form action="airequest.php" method="post">

<div class="form-outline"> 
    <!-- <label class="form-label" for="prompt">How may I assist you?</label> -->
    <textarea  name="prompt" minlength="9" rows="4"></textarea>
</div>

<div>
    <input class="form-control" type="submit" value="Generate" class="btn btn-primary btn-block" />
</div>
</form>
    
</section>
</center>

</body>
</html>