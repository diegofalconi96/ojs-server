<?php
/* Smarty version 3.1.33, created on 2023-06-13 20:10:40
  from 'core:controllerstabsettingsuse' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6488cd400aa069_80600618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d8d049ff4d69bc24528879fcb04f0ece57f6ec6' => 
    array (
      0 => 'core:controllerstabsettingsuse',
      1 => 1575681981,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6488cd400aa069_80600618 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"users-and-roles.md",'section'=>"users",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'usersUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.user.UserGridHandler",'op'=>"fetchGrid",'oldUserId'=>$_smarty_tpl->tpl_vars['oldUserId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('gridContainerId', "userGridContainer");
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>$_smarty_tpl->tpl_vars['gridContainerId']->value,'url'=>$_smarty_tpl->tpl_vars['usersUrl']->value),$_smarty_tpl ) );?>

<?php }
}
