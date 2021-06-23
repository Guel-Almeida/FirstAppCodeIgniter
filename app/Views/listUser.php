<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
    <script>
    function confirma(){
        if(!confirm('Excluir?')){
            return false;
        }
        return true;
    }
    </script>
</head>
<body>

        <div class="container">
      
         <p><?php echo anchor(base_url('user/create'), 'novo usuario',['class'=>'btn btn-primary mt-5']) ?></p>
            <table class="table">
            <thead>
          
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($users as $key) {  ?>
                    <tr>
                         <td><?php echo $key['nome']; ?></td>
                         <td><?php echo $key['idade']; ?></td>
                         <td><?php echo anchor('user/edit/'.$key['id'],'editar') ?>
                         /
                         <?php echo anchor('user/delete/'.$key['id'],'delete',['onclick'=>'return confirma()']); ?></td>
                    </tr>
                    <?php }
              ?>

            
            </tbody>
            </table>
            <?php echo $pager->links(); ?>
        </div>


    
</body>
</html>