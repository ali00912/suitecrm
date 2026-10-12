<?php
/* Smarty version 4.5.6, created on 2026-09-21 16:48:39
  from '/var/www/html/public/legacy/modules/Emails/templates/displayHasAttachmentField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6ab15fe7687bc1_05363111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aeb1927194466e4239fdf9d4bebe8559de618bb' => 
    array (
      0 => '/var/www/html/public/legacy/modules/Emails/templates/displayHasAttachmentField.tpl',
      1 => 1790004578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6ab15fe7687bc1_05363111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/public/legacy/include/Smarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>

<div class="email-has-attachement">
    <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value)) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['has_attachment'])) {?>
            <div class="email-has-attachment"><span class="glyphicon"><img src="<?php echo smarty_function_sugar_getimagepath(array('directory'=>'','file_name'=>'attachment-indicator','file_extension'=>"svg",'file'=>'attachment-indicator.svg'),$_smarty_tpl);?>
"/></span></div>
        <?php }?>

    <?php }?>
</div>
<?php }
}
