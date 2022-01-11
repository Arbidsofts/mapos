<div class="span12" style="margin-left: 0">
    <form action="<?php echo base_url(); ?>index.php/permissoes/adicionar" id="formPermissao" method="post">
        <div class="span12" style="margin-left: 0">
            <div class="widget-box">
                <div class="widget-title">
               <span class="icon">
               <i class="fas fa-lock"></i>
               </span>
                    <h5>Cadastro de Permiss&atilde;o</h5>
                    <div class="buttons">
                        <a title="Voltar" class="btn btn-mini btn-inverse" href="<?php echo site_url() ?>/permissoes"><i class="fas fa-arrow-left"></i> Voltar</a>
                    </div>
                </div>
                <div class="widget-content">
                    <div class="span6">
                        <label>Nome da Permiss&atilde;o</label>
                        <input name="nome" type="text" id="nome" class="span12" />
                    </div>
                    <div class="span6">
                        <br />
                        <label>
                            <input name="marcarTodos" type="checkbox" value="1" id="marcarTodos" />
                            <span class="lbl"> Marcar Todos</span>
                        </label>
                        <br />
                    </div>
                    <div class="accordion" id="collapse-group">
                        <div class="accordion-group widget-box">
                            <div class="accordion-heading">
                                <div class="widget-title">
                                    <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                        <span class="icon"><i class="fas fa-key"></i></span>
                                        <h5>Clientes</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse in accordion-body" id="collapseGOne">
                                <div class="widget-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="vCliente" class="marcar" type="checkbox" checked="checked" value="1" />
                                                    <span class="lbl"> Visualizar Cliente</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="aCliente" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Adicionar Cliente</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="eCliente" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Editar Cliente</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="dCliente" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Excluir Cliente</span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group widget-box">
                            <div class="accordion-heading">
                                <div class="widget-title">
                                    <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse">
                                        <span class="icon"><i class="fas fa-key"></i></span>
                                        <h5>Produtos</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse accordion-body" id="collapseGTwo">
                                <div class="widget-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="vProduto" class="marcar" type="checkbox" checked="checked" value="1" />
                                                    <span class="lbl"> Visualizar Produto</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="aProduto" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Adicionar Produto</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="eProduto" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Editar Produto</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="dProduto" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Excluir Produto</span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group widget-box">
                            <div class="accordion-heading">
                                <div class="widget-title">
                                    <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                        <span class="icon"><i class="fas fa-key"></i></span>
                                        <h5>Servi&ccedil;os</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse accordion-body" id="collapseGThree">
                                <div class="widget-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="vServico" class="marcar" type="checkbox" checked="checked" value="1" />
                                                    <span class="lbl"> Visualizar Servi&ccedil;o</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="aServico" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Adicionar Servi&ccedil;o</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="eServico" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Editar Servi&ccedil;o</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="dServico" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Excluir Servi&ccedil;o</span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group widget-box">
                            <div class="accordion-heading">
                                <div class="widget-title">
                                    <a data-parent="#collapse-group" href="#collapseGThree3" data-toggle="collapse">
                                        <span class="icon"><i class="fas fa-key"></i></span>
                                        <h5>Ordem de Servi&ccedil;os</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse accordion-body" id="collapseGThree3">
                                <div class="widget-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="vOs" class="marcar" type="checkbox" checked="checked" value="1" />
                                                    <span class="lbl"> Visualizar O.S.</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="aOs" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Adicionar O.S.</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="eOs" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Editar O.S.</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="dOs" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Excluir O.S.</span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group widget-box">
                            <div class="accordion-heading">
                                <div class="widget-title">
                                    <a data-parent="#collapse-group" href="#collapseGThree33" data-toggle="collapse">
                                        <span class="icon"><i class="fas fa-key"></i></span>
                                        <h5>Vendas</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse accordion-body" id="collapseGThree33">
                                <div class="widget-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="vVenda" class="marcar" type="checkbox" checked="checked" value="1" />
                                                    <span class="lbl"> Visualizar Venda</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="aVenda" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Adicionar Venda</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="eVenda" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Editar Venda</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="dVenda" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Excluir Venda</span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group widget-box">
                            <div class="accordion-heading">
                                <div class="widget-title">
                                    <a data-parent="#collapse-group" href="#collapseGThree333" data-toggle="collapse">
                                        <span class="icon"><i class="fas fa-key"></i></span>
                                        <h5>Cobran&ccedil;as</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse accordion-body" id="collapseGThree333">
                                <div class="widget-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="vCobranca" class="marcar" type="checkbox" checked="checked" value="1" />
                                                    <span class="lbl"> Visualizar Cobran&ccedil;as</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="aCobranca" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Adicionar Cobran&ccedil;as</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="eCobranca" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Editar Cobran&ccedil;as</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="dCobranca" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Excluir Cobran&ccedil;as</span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group widget-box">
                            <div class="accordion-heading">
                                <div class="widget-title">
                                    <a data-parent="#collapse-group" href="#collapseGThree3333" data-toggle="collapse">
                                        <span class="icon"><i class="fas fa-key"></i></span>
                                        <h5>Garantias</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse accordion-body" id="collapseGThree3333">
                                <div class="widget-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="vGarantia" class="marcar" type="checkbox" checked="checked" value="1" />
                                                    <span class="lbl"> Visualizar Garantia</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="aGarantia" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Adicionar Garantia</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="eGarantia" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Editar Garantia</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="dGarantia" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Excluir Garantia</span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group widget-box">
                            <div class="accordion-heading">
                                <div class="widget-title">
                                    <a data-parent="#collapse-group" href="#collapseGThree33333" data-toggle="collapse">
                                        <span class="icon"><i class="fas fa-key"></i></span>
                                        <h5>Arquivos</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse accordion-body" id="collapseGThree33333">
                                <div class="widget-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="vArquivo" class="marcar" type="checkbox" checked="checked" value="1" />
                                                    <span class="lbl"> Visualizar Arquivo</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="aArquivo" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Adicionar Arquivo</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="eArquivo" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Editar Arquivo</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="dArquivo" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Excluir Arquivo</span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group widget-box">
                            <div class="accordion-heading">
                                <div class="widget-title">
                                    <a data-parent="#collapse-group" href="#collapseGThree333343" data-toggle="collapse">
                                        <span class="icon"><i class="fas fa-key"></i></span>
                                        <h5>Financeiro</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse accordion-body" id="collapseGThree333343">
                                <div class="widget-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="vPagamento" class="marcar" type="checkbox" checked="checked" value="1" />
                                                    <span class="lbl"> Visualizar Pagamento</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="aPagamento" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Adicionar Pagamento</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="ePagamento" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Editar Pagamento</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="dPagamento" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Excluir Pagamento</span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="vLancamento" class="marcar" type="checkbox" checked="checked" value="1" />
                                                    <span class="lbl"> Visualizar Lan&ccedil;amento</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="aLancamento" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Adicionar Lan&ccedil;amento</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="eLancamento" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Editar Lan&ccedil;amento</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="dLancamento" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Excluir Lan&ccedil;amento</span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group widget-box">
                            <div class="accordion-heading">
                                <div class="widget-title">
                                    <a data-parent="#collapse-group" href="#collapseGThree333335" data-toggle="collapse">
                                        <span class="icon"><i class="fas fa-key"></i></span>
                                        <h5>Relat&oacute;rios</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse accordion-body" id="collapseGThree333335">
                                <div class="widget-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="rCliente" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Relat&oacute;rio Cliente</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="rServico" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Relat&oacute;rio Servi&ccedil;o</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="rOs" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Relat&oacute;rio O.S.</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="rProduto" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Relat&oacute;rio Produto</span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="rVenda" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Relat&oacute;rio Venda</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="rFinanceiro" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Relat&oacute;rio Financeiro</span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group widget-box">
                            <div class="accordion-heading">
                                <div class="widget-title">
                                    <a data-parent="#collapse-group" href="#collapseGThree333338" data-toggle="collapse">
                                        <span class="icon"><i class="fas fa-key"></i></span>
                                        <h5>Configura&ccedil;&otilde;es e Sistema</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="collapse accordion-body" id="collapseGThree333338">
                                <div class="widget-content">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="cUsuario" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Configurar Usu&aacute;rio</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="cEmitente" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Configurar Emitente</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="cPermissao" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Configurar Permiss&atilde;o</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="cBackup" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Backup</span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input name="cAuditoria" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Auditoria</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="cEmail" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> E-mails</span>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="cSistema" class="marcar" type="checkbox" value="1" />
                                                    <span class="lbl"> Sistema</span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#marcarTodos").change(function() {
            $("input:checkbox").prop('checked', $(this).prop("checked"));
        });
        $("#formPermissao").validate({
            rules: {
                nome: {
                    required: true
                }
            },
            messages: {
                nome: {
                    required: 'Campo obrigatório'
                }
            }
        });
    });
</script>
