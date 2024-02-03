<?php  require './views/partials/productsHeader.php' ?>

<div class="main-content">

    <table>
    <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>email</th>
        <th>phone</th>
        <th>message</th>
        <th></th>
    </tr>
    <?php foreach($messages as $message) { ?>
    <tr>
        <th><?= $message['name']?></th>
        <th><?= $message['lastname']?></th>
        <th><?= $message['email']?></th>
        <th><?= $message['phone']?></th>
        <th><?= $message['message']?></th>
        <th><form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $message['id'] ?>">
        <button>DELETE</button>
        </form></th>
    </tr>
    <?php }?>
    
    
    </table>
    
</div>

<?php require './views/partials/productsFooter.php' ?>