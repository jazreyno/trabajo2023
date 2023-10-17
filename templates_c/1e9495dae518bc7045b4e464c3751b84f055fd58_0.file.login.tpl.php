<?php
/* Smarty version 4.2.1, created on 2023-10-17 03:07:17
  from 'D:\xamp\htdocs\web\trabajo2023\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652dde457ccc17_11795716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e9495dae518bc7045b4e464c3751b84f055fd58' => 
    array (
      0 => 'D:\\xamp\\htdocs\\web\\trabajo2023\\templates\\login.tpl',
      1 => 1697504764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_652dde457ccc17_11795716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 


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

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class='alert alert-danger' role='alert'>
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div> 
        <?php }?> 
       
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 


<?php }
}
