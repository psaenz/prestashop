<?php /* Smarty version Smarty-3.1.19, created on 2016-11-25 17:04:58
         compiled from "/homepages/46/d658035907/htdocs/clickandbuilds/PrestaShop/PediaStore/modules/blockcmsinfo/blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15812827675838c39aecbaa0-08570816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '380ef4e760558e371c3b88e3d0ce5aee9241b5e3' => 
    array (
      0 => '/homepages/46/d658035907/htdocs/clickandbuilds/PrestaShop/PediaStore/modules/blockcmsinfo/blockcmsinfo.tpl',
      1 => 1480105479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15812827675838c39aecbaa0-08570816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5838c39aed07d9_89327174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5838c39aed07d9_89327174')) {function content_5838c39aed07d9_89327174($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div>
		<?php } ?>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>
