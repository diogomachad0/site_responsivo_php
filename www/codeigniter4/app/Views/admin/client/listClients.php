<section class="d-flex align-items-center justify-content-between">
        <h1 class="my-4 mx-3">Listagem de clientes</h1>
        <form action="<?= base_url('admin/ListClients/search') ?>" method="post" class="d-flex align-items-center">
            <label for="search" class="d-none">Buscar cliente</label>
            <input class="form-control" type="text" name="search" id="search" maxlength="100" placeholder="Search">
            <button class="btn btn-primary" type="submit">Buscar<i class="fas fa-search"></i></button>
        </form>
    </section>
<table class="table table-striped">

    <tr>
        <th>ID Cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Ações</th>
    </tr>

    <?php
   foreach($arrayClients as $client){
    ?>
    <tr>
        <td>
            <?=$client['idClient']?>
        </td>
        <td>
        <?=$client['name']?>
        </td>
        <td>
        <?=$client['email']?>
        </td>
        <td>
        <?=$client['phone']?>
        </td>
        <td>
        <?=$client['address']?>
        </td>
        <td>
            <a class="btn btn-warning" href="<?=base_url("admin/updateClient/{$client['idClient']}")?>">
            Alterar
            </a>
        </td>
        <td>
            <a class="btn btn-danger" href="<?=base_url("admin/deleteClient/{$client['idClient']}")?>">
            Deletar
            </a>
        </td>
    </tr>
    <?php

}
?>

</table>