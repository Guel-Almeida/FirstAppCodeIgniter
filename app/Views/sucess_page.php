<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="alert alert-danger mt-5">
            <?php echo $sms;?>
         
        </div>
        <p class="btn mt-3"><?php echo anchor(base_url(),'voltar'); ?></p>
      
   
    </div>
</body>
</html>
