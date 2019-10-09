<!DOCTYPE html>
<html lang="br">
<head>
    <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class='container'>
        
        <h2>Cliente</h2>
        <table class='table'>
            <tr>
                <th>CPF</th>
                <th>NOME</th>
                <th>Endereço</th>
            </tr>
            <?php foreach($clientes as $c) : ?>
                <tr>
                    <td><?= $c['telefone'] ?></td>
                    <td><?= $c['nome'] ?></td>
                    <td><?= $c['endereco'] ?></td>
                </tr>
            <?php endforeach ?> 
        </table>
        <?php if($this->session->flashdata('success')) : ?>
        <p class='alert alert-success'><?= $this->session->flashdata('success') ?></p> 
        <?php endif ?>
        <h2>Cadastro</h2>
        <?php
            echo form_open('cliente/novo', array(
            ));
            echo form_label('Nome','nome', array(
            ));
            echo form_input(array(
                'name' => 'nome',
                'id' => 'nome',
                'class' => 'form-control',
                'maxlength' => '255'
            ));
            echo form_label('Telefone','telefone', array(
            ));
            echo form_input(array(
                'name' => 'telefone',
                'id' => 'telefone',
                'class' => 'form-control',
                'maxlength' => '255'
            ));
            echo form_label('Endereço','endereco', array(
            ));
            echo form_input(array(
                'name' => 'endereco',
                'id' => 'endereco',
                'class' => 'form-control',
                'maxlength' => '255'
            ));
            echo '<br>';
            echo form_button(array(
                'name' => 'btnCadastrar',
                'content' => 'Cadastrar',
                'type' => 'submit',
                'class' => 'form-control btn btn-primary'
            ));
            echo form_close();
        ?>
    </div>      
</body>
</html>