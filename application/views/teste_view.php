<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Projeto </title>
    <link rel="shortcut icon" href="https://www.voitto.com.br/assets/images/voitto-icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/cep.js"></script>
    <script src="<?= base_url() ?>/assets/js/formulario.js"></script>
</head>
<body>
<div class="ui container center aligned segment">
    <form method="post" class="ui form" name="formulario">
        <div class="field">
            <label> Alterando o endereço de: </label>
            <select id="selectPessoa" name="pessoa" required>
                <option disabled selected value="">Nome da pessoa</option>
                <?php
                 foreach ($pessoas as $pessoa) {
                     echo "<option value='$pessoa->id'>$pessoa->nome</option>";
                 }
                ?>
            </select>
        </div>
        <div class="three fields">
            <div class="field">
                <label>CEP* <a href="" > Não sei meu CEP</a></label>
                <input type="text" id="cep" name="cep" onblur="pesquisacep(this.value);" required>
            </div>
            <div class="field">
                <label>Endereço* </label>
                <input type="text" id="endereco" name="endereco">
            </div>
           <div class="field">
                <label>Número* </label>
                <input type="text"  id="numero" name="numero" >
            </div>
        </div>

        <div class="field">
            <label>Bairro* </label>
            <input type="text" id="bairro" name="bairro">
        </div>
        <div class="field">
            <label>Complemento </label>
            <input type="text" id="complemento" name="complemento">
        </div>
        <div class="two fields">
            <div class="field">
                <label>Cidade* </label>
                <input type="text"  id="cidade" name="cidade">
            </div>
            <div class="field">
            <label> Estado* </label>
                <input type="text" id="estado" name="estado" class="ui fluid dropdown">
            </div>
        </div>

    </form>
</div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
</body>
</html>