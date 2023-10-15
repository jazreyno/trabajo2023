<select name="empresa_edit" class="form-control">
{foreach from=$empresa item=$empresas}
 <option value="{$empresa->id_empresa}">{$empresa->nombre}</option>
{/foreach}
</select>

<input type="submit">
</form>

{include file="footer.tpl"}