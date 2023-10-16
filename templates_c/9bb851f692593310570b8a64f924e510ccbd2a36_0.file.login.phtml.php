<?php
/* Smarty version 4.2.1, created on 2023-10-16 17:41:22
  from 'D:\xamp\htdocs\web\trabajo2023\templates\login.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652d59a257eae6_26399874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb851f692593310570b8a64f924e510ccbd2a36' => 
    array (
      0 => 'D:\\xamp\\htdocs\\web\\trabajo2023\\templates\\login.phtml',
      1 => 1697470881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d59a257eae6_26399874 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>
 
require 'templates/header.tpl';
<?php echo '?>'; ?>


<?php echo '<?php'; ?>
 

    $contrasenia = "12345";
    $contraseniaEncriptada = password_hash($contrasenia, PASSWORD_DEFAULT);
    echo ("Clave encriptada $contraseniaEncriptada");

<?php echo '?>'; ?>



<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="auth">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Passwword</label>
            <input type="password" required class="form-control" id="contrasenia" name="contrasenia">
        </div>

        <?php echo '<?php'; ?>
 if ($error) : <?php echo '?>'; ?>

            <div class='alert alert-danger' role='alert'>
                <?php echo '<?'; ?>
= $error <?php echo '?>'; ?>

            </div> 
        <?php echo '<?php'; ?>
 endif <?php echo '?>'; ?>

       
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>

<?php echo '<?php'; ?>
 require 'templates/footer.phtml' <?php echo '?>'; ?>



<?php echo '<?php'; ?>
 require 'templates/footer.tpl' <?php echo '?>'; ?>

<?php }
}
