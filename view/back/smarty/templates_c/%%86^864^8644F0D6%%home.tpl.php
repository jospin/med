<?php /* Smarty version 2.6.26, created on 2018-01-17 15:27:14
         compiled from home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'home.tpl', 12, false),)), $this); ?>
<table width="100%">
    <tr>
      <td><b>Proprietario</b></td>
      <td><b>Tipo</b></td>
      <td><b>Praia</b></td>
      <td><b>Endereço</b></td>
      <td><b>Telefone</b></td>
      <td><b>Excluir</b></td>
  </tr>
  <?php $_from = $this->_tpl_vars['imoveis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
  <tr>
      <td><a href='formImovel.php?id_imovel=<?php echo $this->_tpl_vars['i']->id_imovel; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['i']->proprietario)) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a></td>
      <td><?php if ($this->_tpl_vars['i']->tipo == 'C'): ?> Casa <?php else: ?> Terreno <?php endif; ?></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['i']->praia)) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['i']->endereco)) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</td>
      <td><?php echo $this->_tpl_vars['i']->ddd; ?>
 - <?php echo $this->_tpl_vars['i']->telefone; ?>
</td>
      <td><a href='#' id='<?php echo $this->_tpl_vars['i']->id_imovel; ?>
' class='excluir'>Excluir</a></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>