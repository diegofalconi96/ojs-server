<?php
/* Smarty version 3.1.33, created on 2023-06-13 19:51:48
  from 'app:frontendcomponentsannounc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6488c8d4d5b8f1_25349255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9462510335e36fd0c92bd371372fb9c9173699b4' => 
    array (
      0 => 'app:frontendcomponentsannounc',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/announcement_summary.tpl' => 1,
  ),
),false)) {
function content_6488c8d4d5b8f1_25349255 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="cmp_announcements">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
?>
		<li>
			<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/announcement_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
