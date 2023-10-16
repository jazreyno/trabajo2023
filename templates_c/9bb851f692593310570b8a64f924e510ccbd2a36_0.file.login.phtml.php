<?php
/* Smarty version 4.2.1, created on 2023-10-16 09:41:37
  from 'D:\xamp\htdocs\web\trabajo2023\templates\login.phtml' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ce93198b3c8_35312810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb851f692593310570b8a64f924e510ccbd2a36' => 
    array (
      0 => 'D:\\xamp\\htdocs\\web\\trabajo2023\\templates\\login.phtml',
      1 => 1697442097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652ce93198b3c8_35312810 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>
 
require 'templates/header.tpl';
<?php echo '?>'; ?>


<?php echo '<?php'; ?>
 

    $contrasenia = "12345";
    $contraseniaEncriptada = password_hash($contrasenia, PASSWORD_DEFAULT);
    echo ("Clave encriptada $contraseniaEncriptada");

<?php echo '?>'; ?>


<h2>Login</h2>
<div>
<form method="POST" action="auth">
        <?php echo '<?php'; ?>
 if ($error) : <?php echo '?>'; ?>

            <div class='alert alert-danger' role='alert'>
                <?php echo '<?'; ?>
= $error <?php echo '?>'; ?>

            </div> 
        <?php echo '<?php'; ?>
 endif <?php echo '?>'; ?>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" required class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="contrasenia">Password</label>
            <input type="password" required class="form-control" id="contrasenia" name="contrasenia">
        </div>

        <button type="submit">Login</button>

    </form>
</div>

<?php echo '<?php'; ?>
 require 'templates/footer.tpl' <?php echo '?>'; ?>

<?php }
}
