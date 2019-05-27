<?php
    session_start();

    sleep(1);

    $qnt_contatos = count($_SESSION['contatos']);
?>

<h1>Meus Contatos <?= $qnt_contatos ?> </h1>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Cidade</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0; $i < $qnt_contatos; $i++): ?>
        <tr>
            <td><?php echo $_SESSION['contatos'][$i]['nome'] ?></td>
            <td><?= $_SESSION['contatos'][$i]['telefone'] ?></td>
            <td><?= $_SESSION['contatos'][$i]['cidade'] ?></td>
        </tr>
        <?php endfor ?>
    </tbody>
</table>