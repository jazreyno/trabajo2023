<select name="empresa_edit" class="form-control">
{foreach from=$empresa item=$empresas}
 <option value="{$empresas->id_empresa}">{$empresas->nombre}</option>
{/foreach}
</select>

<input type="submit">
</form>

{include file="footer.tpl"}
