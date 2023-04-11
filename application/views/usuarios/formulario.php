<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("css/bootstrap.css") ?>">
    <title>Formulário</title>
</head>
<body>
<div class="container">

    <?php if($this->session->flashdata("success")) : ?>
        <p class="alert alert-success"><?=$this->session->flashdata("success")?></p>
    <?php endif ?>

    <?php if($this->session->flashdata("danger")) : ?>
        <p class="alert alert-danger"><?=$this->session->flashdata("danger")?></p>
    <?php endif ?>

    <h1>Dados do dia:</h1>

    <?php 
    echo form_open("cadastrado/novo");
    
    echo form_label("Email:","email");
    echo form_input(array(
        "name"=>"email",
        "id"=>"email",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));
    echo form_label("Faculdade:","faculdade");
    echo form_input(array(
        "name"=>"faculdade",
        "id"=>"faculdade",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));
    echo form_label("Semestre:","semestre");
    echo form_input(array(
        "name"=>"semestre",
        "id"=>"semestre",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));
    echo form_label("Presenca:","presenca");
    echo form_input(array(
        "name"=>"presenca",
        "id"=>"presenca",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));
    echo form_label("Atividade:","atividade");
    echo form_textarea(array(
        "name"=>"atividade",
        "id"=>"atividade",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));

    echo form_button(array(
        "class"=>"btn btn-primary",
        "type"=>"submit",
        "content"=>"Cadastrar"
    ));
    echo form_close(); 
    ?>

    
</div>
</body>
</html>