<?php
/* Smarty version 3.1.33, created on 2023-06-13 20:07:24
  from 'app:manageIssuesissues.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6488cc7c0a1c74_45004126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efebebd5ddd268c3b68497d4c314565b00f3746d' => 
    array (
      0 => 'app:manageIssuesissues.tpl',
      1 => 1575681927,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:manageIssues/issuesTabs.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_6488cc7c0a1c74_45004126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pageTitle', "editor.navigation.issues");
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("app:manageIssues/issuesTabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
