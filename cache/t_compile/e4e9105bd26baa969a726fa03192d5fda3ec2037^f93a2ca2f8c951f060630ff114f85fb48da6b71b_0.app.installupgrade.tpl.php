<?php
/* Smarty version 3.1.33, created on 2023-06-13 19:20:01
  from 'app:installupgrade.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6488c161928b47_47405560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f93a2ca2f8c951f060630ff114f85fb48da6b71b' => 
    array (
      0 => 'app:installupgrade.tpl',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:common/formErrors.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_6488c161928b47_47405560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"installer.upgradeApplication"), 0, false);
?>

<div class="pkp_page_content pkp_page_upgrade">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.upgradeInstructions",'version'=>$_smarty_tpl->tpl_vars['version']->value->getVersionString(false),'baseUrl'=>$_smarty_tpl->tpl_vars['baseUrl']->value),$_smarty_tpl ) );?>


	<form class="pkp_form" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"installUpgrade"),$_smarty_tpl ) );?>
">
		<?php $_smarty_tpl->_subTemplateRender("app:common/formErrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php if ($_smarty_tpl->tpl_vars['isInstallError']->value) {?>
			<p>
				<span class="pkp_form_error"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.installErrorsOccurred"),$_smarty_tpl ) );?>
:</span>
				<ul class="pkp_form_error_list">
					<li><?php if ($_smarty_tpl->tpl_vars['dbErrorMsg']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.error.databaseError",'error'=>$_smarty_tpl->tpl_vars['dbErrorMsg']->value),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['errorMsg']->value),$_smarty_tpl ) );
}?></li>
				</ul>
			</p>
		<?php }?>

		<div class="formButtons">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('class'=>"inline",'type'=>"submit",'id'=>"installButton",'label'=>"installer.upgradeApplication"),$_smarty_tpl ) );?>

		</div>

	</form>
</div><!-- .pkp_page_upgrade -->

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
