<?php
/* Smarty version 3.1.33, created on 2023-06-13 19:48:50
  from 'app:installupgradeComplete.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6488c8224a3e49_05065084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be6a12d723d18df9a4a15385ad39fa87f7c8df4f' => 
    array (
      0 => 'app:installupgradeComplete.tp',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_6488c8224a3e49_05065084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"installer.upgradeApplication"), 0, false);
?>

<div class="pkp_page_content pkp_page_upgrade_complete">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.upgradeComplete",'version'=>$_smarty_tpl->tpl_vars['newVersion']->value->getVersionString(false)),$_smarty_tpl ) );?>


	<?php if (!empty($_smarty_tpl->tpl_vars['notes']->value)) {?>
		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.releaseNotes"),$_smarty_tpl ) );?>
</h4>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notes']->value, 'note');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
?>
			<p><pre style="font-size: 125%"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['note']->value ));?>
</pre></p>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['writeConfigFailed']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.overwriteConfigFileInstructions"),$_smarty_tpl ) );?>


		<form class="pkp_form" action="#">
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.contentsOfConfigFile"),$_smarty_tpl ) );?>
:<br />
				<textarea name="config" cols="80" rows="20" class="textArea" style="font-family: Courier,'Courier New',fixed-width"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['configFileContents']->value ));?>
</textarea>
			</p>
		</form>
	<?php }?>
</div><!-- .pkp_page_upgrade_complete -->

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
