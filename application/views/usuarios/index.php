<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("css/bootstrap.css") ?>">
    <title>Ponto digital</title>
</head>
<body>
<div class="container">

    <?php if($this->session->flashdata("success")) : ?>
        <p class="alert alert-success"><?=$this->session->flashdata("success")?></p>
    <?php endif ?>

    <?php if($this->session->flashdata("danger")) : ?>
        <p class="alert alert-danger"><?=$this->session->flashdata("danger")?></p>
    <?php endif ?>

    <?php if($this->session->userdata("usuario logado")):?>

    <h1>Registro de ponto:</h1> 
        <table class="table">
         <tr>
             <th>Email</th>
             <th>Faculdade</th>
             <th>Semestre</th>
             <th>Presença</th>
             <th>Atividade do dia</th>
         </tr>
            <?php foreach($usuarios as $usuario): ?>                                   
            <tr>
                <td><?= $usuario['email']?></td>
                <td><?= $usuario['faculdade']?></td>
                <td><?= $usuario['semestre']?></td>
                <td><?= $usuario['presenca']?></td>
                <td><?= $usuario['atividade']?></td>
            </tr>
            <?php endforeach ?>
    </table>
    
    <?= anchor("cadastrado/formulario","Novo usuario",array("class"=>"btn btn-primary"))?>

    <?= anchor("login/logout","Sair",array("class"=>"btn btn-primary"))?>

    <?php else : ?>

    <h1>Login:</h1>

    <?php 
    echo form_open("login/autenticar");
    
    echo form_label("Email:","email");
    echo form_input(array(
        "name"=>"email",
        "id"=>"email",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));
    echo form_label("Senha:","senha");
    echo form_password(array(
        "name"=>"senha",
        "id"=>"senha",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));

    echo form_button(array(
        "class"=>"btn btn-primary",
        "type"=>"submit",
        "content"=>"Login"
    ));
    echo form_close(); 
    ?>

    <h1>Cadastrar usuario:</h1>

    <?php 
    echo form_open("usuarios/novo");
    
    echo form_label("Nome:","nome");
    echo form_input(array(
        "name"=>"nome",
        "id"=>"nome",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));
    echo form_label("Email:","email");
    echo form_input(array(
        "name"=>"email",
        "id"=>"email",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));
    echo form_label("Senha:","senha");
    echo form_password(array(
        "name"=>"senha",
        "id"=>"senha",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));

    echo form_button(array(
        "class"=>"btn btn-primary",
        "type"=>"submit",
        "content"=>"Casdastrar"
    ));
    echo form_close(); 
    
    ?>
    <?php endif?>
</div>
</body>
</html>