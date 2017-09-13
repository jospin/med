<table width="100%">
    <tr>
      <td><b>Proprietario</b></td>
      <td><b>Tipo</b></td>
      <td><b>Praia</b></td>
      <td><b>Endereço</b></td>
      <td><b>Telefone</b></td>
      <td><b>Excluir</b></td>
  </tr>
  {foreach item=i from=$imoveis}
  <tr>
      <td><a href='formImovel.php?id_imovel={$i->id_imovel}'>{$i->proprietario|capitalize}</a></td>
      <td>{if $i->tipo == "C"} Casa {else} Terreno {/if}</td>
      <td>{$i->praia|capitalize}</td>
      <td>{$i->endereco|capitalize}</td>
      <td>{$i->ddd} - {$i->telefone}</td>
      <td><a href='#' id='{$i->id_imovel}' class='excluir'>Excluir</a></td>
  </tr>
  {/foreach}
</table>