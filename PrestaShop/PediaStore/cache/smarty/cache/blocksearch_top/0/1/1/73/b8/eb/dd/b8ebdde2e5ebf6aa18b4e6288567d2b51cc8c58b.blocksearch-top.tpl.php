<?php /*%%SmartyHeaderCode:14198138895838c39ace0456-21299228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8ebdde2e5ebf6aa18b4e6288567d2b51cc8c58b' => 
    array (
      0 => '/homepages/46/d658035907/htdocs/clickandbuilds/PrestaShop/PediaStore/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1480105479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14198138895838c39ace0456-21299228',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5839070ca777e3_04273961',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5839070ca777e3_04273961')) {function content_5839070ca777e3_04273961($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//pediastore.com/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Buscar</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
