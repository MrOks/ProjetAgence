<?php /* Smarty version Smarty-3.1.13, created on 2013-10-24 21:19:50
         compiled from "/Users/tonydossantos/web/htdocs/ProjetAgence/templates/standard/tabsmenue-desk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130927841526972d6217997-20194693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37775344a218d0c69629afce74aa55f55225281' => 
    array (
      0 => '/Users/tonydossantos/web/htdocs/ProjetAgence/templates/standard/tabsmenue-desk.tpl',
      1 => 1377137762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130927841526972d6217997-20194693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'desktab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526972d628d8f7_44819557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526972d628d8f7_44819557')) {function content_526972d628d8f7_44819557($_smarty_tpl) {?><div class="tabswrapper">

<ul class="tabs">
		<li class="desk"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['desktab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="index.php"><span><?php echo $_smarty_tpl->getConfigVariable('desktop');?>
</span></a></li>
	</ul>
</div><?php }} ?>