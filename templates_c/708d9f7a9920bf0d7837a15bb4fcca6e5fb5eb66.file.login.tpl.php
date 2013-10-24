<?php /* Smarty version Smarty-3.1.13, created on 2013-10-24 21:19:44
         compiled from "/Users/tonydossantos/web/htdocs/ProjetAgence/templates/standard/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1407841136526972d0c22386-72625882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '708d9f7a9920bf0d7837a15bb4fcca6e5fb5eb66' => 
    array (
      0 => '/Users/tonydossantos/web/htdocs/ProjetAgence/templates/standard/login.tpl',
      1 => 1377137760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1407841136526972d0c22386-72625882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'loginerror' => 0,
    'mailnotify' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526972d0cdeb21_77242702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526972d0cdeb21_77242702')) {function content_526972d0cdeb21_77242702($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Login",'showheader'=>"no",'jsload'=>"ajax"), 0);?>


		<div class="login">
			<div class="login-in">
				<div class="logo-name">
					<h1><a href = "http://collabtive.o-dyn.de/" title = "<?php echo $_smarty_tpl->tpl_vars['settings']->value['name'];?>
 Open Source project management"><img src="./templates/standard/images/logo-a.png" alt="<?php echo $_smarty_tpl->tpl_vars['settings']->value['name'];?>
"  /></a></h1>
					<h2><?php echo $_smarty_tpl->tpl_vars['settings']->value['subtitle'];?>
</h2>
				</div>

				<form id = "loginform" name = "loginform" method="post" action="manageuser.php?action=login"  onsubmit="return validateCompleteForm(this,'input_error');">
					<fieldset>

					<div class="row">
						<label for="username" class="username"></label>
						<input type="text" class="text" name="username" id="username" required = "1" realname = "<?php echo $_smarty_tpl->getConfigVariable('name');?>
" />
					</div>

					<div class="row">
						<label for="pass" class="pass"></label>
						<input type="password" class="text" name="pass" id="pass" realname = "<?php echo $_smarty_tpl->getConfigVariable('password');?>
" />
					</div>


					<div class="row">
						<label for="stay" class="keep" onclick = "toggleClass(this,'keep','keep-active');"><span><?php echo $_smarty_tpl->getConfigVariable('stayloggedin');?>
</span></label>
						<input type = "checkbox" name = "staylogged" id="stay" value = "1" />
					</div>

					<div class="row">
						<button type="submit" class="loginbutn" title="<?php echo $_smarty_tpl->getConfigVariable('loginbutton');?>
" onfocus="this.blur();"></button>
					</div>
					</fieldset>
				</form>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['loginerror']->value==1){?>
				<div class="login-alert timetrack">
					<?php echo $_smarty_tpl->getConfigVariable('loginerror');?>

					<?php if ($_smarty_tpl->tpl_vars['mailnotify']->value==1){?>
						<br /><br />
						<form id = "blaform" name = "resetform" class = "main" method="post" action="manageuser.php?action=loginerror" >
							<div class="row" style="text-align:center;">
								<button  style = "float:none;margin:0 0 0 0;" onclick="$('blaform').submit();" onfocus="this.blur();"><?php echo $_smarty_tpl->getConfigVariable('resetpassword');?>
</button>
							</div>
						</form>
					<?php }?>
					<div class="clear_both"></div>
				</div>
			<?php }?>
		</div>
	</body>
</html>
<?php }} ?>