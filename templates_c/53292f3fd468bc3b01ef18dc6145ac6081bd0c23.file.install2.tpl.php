<?php /* Smarty version Smarty-3.1.13, created on 2013-10-24 21:19:38
         compiled from "./templates/standard/install2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196266363526972ca08b7d6-29777621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53292f3fd468bc3b01ef18dc6145ac6081bd0c23' => 
    array (
      0 => './templates/standard/install2.tpl',
      1 => 1377137760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196266363526972ca08b7d6-29777621',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526972ca1294b8_55549530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526972ca1294b8_55549530')) {function content_526972ca1294b8_55549530($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"install",'showheader'=>"no"), 0);?>


<div class="install" style="text-align:center;padding:5% 0 0 0;">
	<div style="text-align:left;width:500px;margin:0 auto;padding:25px 25px 15px 25px;background:white;border:1px solid;">

		<h1><?php echo $_smarty_tpl->getConfigVariable('installcollabtive');?>
</h1>

		<div style="padding:16px 0 16px 0;">
			<h2><?php echo $_smarty_tpl->getConfigVariable('installstep');?>
 3</h2>
            <em><?php echo $_smarty_tpl->getConfigVariable('createadmin');?>
</em><br /><br />
            
			<form class = "main" name = "adminuser" method = "post" enctype="multipart/form-data" action = "install.php?action=step3">
				<fieldset>
					<div class = "row"><label for = "username"><?php echo $_smarty_tpl->getConfigVariable('name');?>
:</label><input type = "text" name = "name" id = "username" /></div>
					<div class = "row"><label for = "pass"><?php echo $_smarty_tpl->getConfigVariable('password');?>
:</label><input type = "password" name = "pass" id = "pass" /></div>
				</fieldset>
				<br />
					<div class="row-butn-bottom">
						<label>&nbsp;</label>
						<button type="submit"  onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('continue');?>
</button>
					</div>
				</fieldset>
			</form>

				</div>
			</div>
		</div> 
	</body>
</html>
<?php }} ?>