@csrf
<input type="hidden" name="tipo" value="{{ $tipo }}">


<div class="form-group row">

<label  class="col-form-label col-sm-2 required">Nome*</label>
<div class="col-sm-10">
    <input type="text " name="nome" required="required" maxlength="255" class="form-control">
</div>

</div>
<div class="form-group row">

<label  class="col-form-label col-sm-2 " for="razao_social">Razão Social</label>
<div class="col-sm-10">
    <input type="text " id="razao_social" name="razao_social" maxlength="255" class="form-control">
</div>

</div>

<div class="form-group row">

<label  class="col-form-label col-sm-2 required" for="documento">Documento*</label>
<div class="col-sm-10">
    <input type="text "  id="documento" name="documento" required="required" maxlength="255" class="form-control">
</div>

</div>

<div class="form-group row">

<label  class="col-form-label col-sm-2 required" for="ie_rg">IE/RG</label>
<div class="col-sm-10">
    <input type="text " id="ie/rg" name="ie_rg" required="required" maxlength="12" class="ie_rg form-control">
</div>

</div>

<div class="form-group row">

<label  class="col-form-label col-sm-2 required" for="nome_contato">Nome Contato*</label>
<div class="col-sm-10">
    <input type="text " id="nome_contato" name="nome_contato" required="required" maxlength="255" class="form-control">
</div>

</div>

<div class="form-group row">

<label  class="col-form-label col-sm-2 required" for="celular">Celular*</label>
<div class="col-sm-10">
    <input type="text " id="celular" name="celular" required="required" maxlength="15" class="phone form-control">
</div>

</div>

<div class="form-group row">

<label  class="col-form-label col-sm-2 required" for="email">Email*</label>
<div class="col-sm-10">
    <input type="text " id="email name="email" required="required" maxlength="100" class="form-control">
</div>

</div>

<div class="form-group row">

<label  class="col-form-label col-sm-2 " for="telefone">Telefone</label>
<div class="col-sm-10">
    <input type="text " id="telefone" name="telefone"  maxlength="15" class=" phone form-control">
</div>

</div>

<div class="form-group row">

<label  class="col-form-label col-sm-2 required" for="cep">cep*</label>
<div class="col-sm-10">
    <input type="text " id="cep" name="cep"  maxlength="9" class=" cep form-control">
</div>

</div>

<div class="form-group row">

<label  class="col-form-label col-sm-2 required" for="logradouro">Logradouro*</label>
<div class="col-sm-10">
    <input type="text " id="logradouro" name="logradouro" required="required"  maxlength="150" class="form-control">
</div>

</div>
<div class="form-group row">

<label  class="col-form-label col-sm-2 required" for="bairro">Bairro*</label>
<div class="col-sm-10">
    <input type="text " id="bairro" name="bairro" required="required"  maxlength="100" class=" cep form-control">
</div>

</div>
<div class="form-group row">

<label  class="col-form-label col-sm-2 required" for="cidade">Cidade*</label>
<div class="col-sm-10">
    <input type="text " id="cidade" name="cidade" required="required"  maxlength="100" class="form-control">
</div>

</div>
<div class="form-group row">

<label  class="col-form-label col-sm-2 required" for="estado">Estado*</label>
<div class="col-sm-10">
    <input type="text " id="estado" name="estado" required="required"  maxlength="2" class="form-control">
</div>

</div>
<div class="form-group row">

<label  class="col-form-label col-sm-2 required" for="observacao">Observação*</label>
<div class="col-sm-10">
    <input type="text " id="cidade" name="cidade" required="bairro"  maxlength="100" class="form-control">
</div>

</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>