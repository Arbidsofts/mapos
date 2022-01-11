<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
            <span class="icon">
            <i class="fas fa-wrench"></i>
            </span>
                <h5>Configura&ccedil;&otilde;es do Sistema</h5>
            </div>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Gerais</a></li>
                <li><a data-toggle="tab" href="#menu1">Financeiro</a></li>
                <li><a data-toggle="tab" href="#menu2">Produtos</a></li>
                <li><a data-toggle="tab" href="#menu3">Notifica&ccedil;&otilde;es</a></li>
                <li><a data-toggle="tab" href="#menu4">Atualiza&ccedil;&otilde;es</a></li>
                <li><a data-toggle="tab" href="#menu5">O.S.</a></li>
            </ul>
            <form action="<?php echo current_url(); ?>" id="formConfigurar" method="post" class="form-horizontal">
                <div class="widget-content nopadding tab-content">
                    <?php echo $custom_error; ?>
                    <!-- Menu Gerais -->
                    <div id="home" class="tab-pane fade in active">
                        <div class="control-group">
                            <label for="app_name" class="control-label">Nome do Sistema</label>
                            <div class="controls">
                                <input type="text" required name="app_name" value="<?= $configuration['app_name']?>">
                                <span class="help-inline">Nome do sistema.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="app_theme" class="control-label">Tema do Sistema</label>
                            <div class="controls">
                                <select name="app_theme" id="app_theme">
                                    <option value="default" <?= $configuration['app_theme'] == 'default' ? 'selected' : ''; ?> >Padr&atilde;o</option>
                                    <option value="white">Neve</option>
                                </select>
                                <span class="help-inline">Selecione o tema que que deseja usar no sistema.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="per_page" class="control-label">Registros por P&aacute;gina</label>
                            <div class="controls">
                                <select name="per_page" id="theme">
                                    <option value="10">10</option>
                                    <option value="20" <?= $configuration['per_page'] == '20' ? 'selected' : ''; ?> >20</option>
                                    <option value="50" <?= $configuration['per_page'] == '50' ? 'selected' : ''; ?> >50</option>
                                    <option value="100" <?= $configuration['per_page'] == '100' ? 'selected' : ''; ?> >100</option>
                                </select>
                                <span class="help-inline">Selecione quantos registros deseja exibir nas listas.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="control_datatable" class="control-label">Visualiza&ccedil;&atilde;o em DataTables</label>
                            <div class="controls">
                                <select name="control_datatable" id="control_datatable">
                                    <option value="1">Sim</option>
                                    <option value="0" <?= $configuration['control_datatable'] == '0' ? 'selected' : ''; ?> >N&atilde;o</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar a visualiza&ccedil;&atilde;o em tabelas din&acirc;micas.</span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="span8">
                                <div class="span9">
                                    <button type="submit" class="btn btn-primary">Salvar Altera&ccedil;&otilde;es</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Notificaçõs -->
                    <div id="menu3" class="tab-pane fade">
                        <div class="control-group">
                            <label for="os_notification" class="control-label">Notifica&ccedil;&atilde;o de O.S.</label>
                            <div class="controls">
                                <select name="os_notification" id="os_notification">
                                    <option value="todos">Notificar a Todos</option>
                                    <option value="cliente" <?= $configuration['os_notification'] == 'cliente' ? 'selected' : ''; ?> >Somente o Cliente</option>
                                    <option value="tecnico" <?= $configuration['os_notification'] == 'tecnico' ? 'selected' : ''; ?> >Somente o T&eacute;cnico</option>
                                    <option value="emitente" <?= $configuration['os_notification'] == 'emitente' ? 'selected' : ''; ?> >Somente o Emitente</option>
                                    <option value="nenhum" <?= $configuration['os_notification'] == 'nenhum' ? 'selected' : ''; ?> >N&atilde;o Notificar</option>
                                </select>
                                <span class="help-inline">Selecione a op&ccedil;&atilde;o de notifica&ccedil;&atilde;o por e-mail no cadastro de O.S.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="notifica_whats" class="control-label">Notifica&ccedil;&atilde;o do whatsapp</label>
                            <div class="controls">
                                <textarea rows="5" cols="20" name="notifica_whats" id="notifica_whats" placeholder = "Use as tags abaixo para criar seu texto." style="margin: 0px; width: 606px; height: 86px;"><?php echo $configuration['notifica_whats']; ?></textarea>
                            </div>
                            <div class="span3">
                                <label for="notifica_whats_select">Tags de preenchimento<span class="required"></span></label>
                                <select class="span12" name="notifica_whats_select" id="notifica_whats_select" value="">
                                    <option value="0">Selecione...</option>
                                    <option value="{CLIENTE_NOME}">Nome do Cliente</option>
                                    <option value="{NUMERO_OS}">N&uacute;mero da O.S.</option>
                                    <option value="{STATUS_OS}">Status da O.S.</option>
                                    <option value="{VALOR_OS}">Valor da O.S.</option>
                                    <option value="{DESCRI_PRODUTOS}">Descri&ccedil;&atilde;o produtos</option>
                                    <option value="{EMITENTE}">Nome emitente</option>
                                    <option value="{TELEFONE_EMITENTE}">Telefone emitente</option>
                                    <option value="{OBS_OS}">Observa&ccedil;&otilde;es</option>
                                    <option value="{DEFEITO_OS}">Defeitos</option>
                                    <option value="{LAUDO_OS}">Laudo</option>
                                    <option value="{DATA_FINAL}">Data Final</option>
                                    <option value="{DATA_INICIAL}">Data Inicial</option>
                                    <option value="{DATA_GARANTIA}">Data da Garantia</option>
                                </select>
                            </div>
                            <span6 class="span10">
                                Para negrito use: *palavra* |
                                Para it&aacute;lico use: _palavra_ |
                                Para riscado use: ~palavra~
                                </span>
                        </div>
                        <div class="form-actions">
                            <div class="span8">
                                <div class="span9">
                                    <button type="submit" class="btn btn-primary">Salvar Altera&ccedil;&otilde;es</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Financeiro -->
                    <div id="menu1" class="tab-pane fade">
                        <div class="control-group">
                            <label for="control_baixa" class="control-label">Baixa retroativa</label>
                            <div class="controls">
                                <select name="control_baixa" id="control_baixa">
                                    <option value="1">Sim</option>
                                    <option value="0" <?= $configuration['control_baixa'] == '0' ? 'selected' : ''; ?> >N&atilde;o</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar o controle de baixa financeira, com data retroativa.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="control_editos" class="control-label">Edi&ccedil;&atilde;o de O.S.</label>
                            <div class="controls">
                                <select name="control_editos" id="control_editos">
                                    <option value="1" <?= $configuration['control_editos'] == '0' ? 'selected' : ''; ?>>Sim</option>
                                    <option value="0" <?= $configuration['control_editos'] == '0' ? 'selected' : ''; ?> >N&atilde;o</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar a permiss&atilde;o para alterar O.S. faturada e/ou cancelada.</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="pix_key" class="control-label">Chave PIX</label>
                            <div class="controls">
                                <input type="text" name="pix_key" value="<?= $configuration['pix_key']?>">
                                <span class="help-inline">Chave PIX para Recebimento de Pagamentos.</span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="span8">
                                <div class="span9">
                                    <button type="submit" class="btn btn-primary">Salvar Altera&ccedil;&otilde;es</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Produtos -->
                    <div id="menu2" class="tab-pane fade">
                        <div class="control-group">
                            <label for="control_estoque" class="control-label">Controlar Estoque</label>
                            <div class="controls">
                                <select name="control_estoque" id="control_estoque">
                                    <option value="1">Sim</option>
                                    <option value="0" <?= $configuration['control_estoque'] == '0' ? 'selected' : ''; ?> >N&atilde;o</option>
                                </select>
                                <span class="help-inline">Ativar ou desativar o controle de estoque.</span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="span8">
                                <div class="span9">
                                    <button type="submit" class="btn btn-primary">Salvar Altera&ccedil;&otilde;es</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Atualiza&ccedil;&atilde;o -->
                    <div id="menu4" class="tab-pane fade">
                        <div class="form-actions">
                            <div class="span8">
                                <div class="span9">
                                    <button href="#modal-confirmabanco" data-toggle="modal" type="button" class="btn btn-warning"><i class="fas fa-sync-alt"></i> Atualizar Banco de Dados</button>
                                    <button href="#modal-confirmaratualiza" data-toggle="modal" type="button" class="btn btn-danger"><i class="fas fa-sync-alt"></i> Atualizar Mapos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu OS -->
                    <div id="menu5" class="tab-pane fade">
                        <div class="form-actions">
                            <div class="span8">
                                <span6 class="span12"> Defina a vizualiza&ccedil;&atilde;o padr&atilde;o, onde o que ficar checado ser&aacute; exibida na listagem de O.S. por padr&atilde;o.  </span6>
                                <div class="span12">
									<label> <input <?= @in_array("Aberto", json_decode($configuration['os_status_list'])) == 'true' ? 'checked' : ''; ?> name="os_status_list[]" class="marcar" type="checkbox" value="Aberto"> <span class="lbl"> Aberto</span> </label>
									<label> <input <?= @in_array("Aguardando Peças", json_decode($configuration['os_status_list'])) == 'true' ? 'checked' : ''; ?> name="os_status_list[]" class="marcar" type="checkbox" value="Aguardando Peças"> <span class="lbl"> Aguardando Pe&ccedil;as </span> </label>
									<label> <input <?= @in_array("Aprovado", json_decode($configuration['os_status_list'])) == 'true' ? 'checked' : ''; ?> name="os_status_list[]" class="marcar" type="checkbox" value="Aprovado"> <span class="lbl"> Aprovado </span> </label>
									<label> <input <?= @in_array("Cancelado", json_decode($configuration['os_status_list'])) == 'true' ? 'checked' : ''; ?> name="os_status_list[]" class="marcar" type="checkbox" value="Cancelado"> <span class="lbl"> Cancelado</span> </label>
									<label> <input <?= @in_array("Em Andamento", json_decode($configuration['os_status_list'])) == 'true' ? 'checked' : ''; ?> name="os_status_list[]" class="marcar" type="checkbox" value="Em Andamento"> <span class="lbl"> Em Andamento</span> </label>                                  
									<label> <input <?= @in_array("Faturado", json_decode($configuration['os_status_list'])) == 'true' ? 'checked' : ''; ?> name="os_status_list[]" class="marcar" type="checkbox" value="Faturado"> <span class="lbl"> Faturado</span> </label>
									<label> <input <?= @in_array("Finalizado", json_decode($configuration['os_status_list'])) == 'true' ? 'checked' : ''; ?> name="os_status_list[]" class="marcar" type="checkbox" value="Finalizado"> <span class="lbl"> Finalizado</span> </label>
									<label> <input <?= @in_array("Negociação", json_decode($configuration['os_status_list'])) == 'true' ? 'checked' : ''; ?> name="os_status_list[]" class="marcar" type="checkbox" value="Negociação"> <span class="lbl"> Negocia&ccedil;&atilde;o</span> </label>                                  
									<label> <input <?= @in_array("Orçamento", json_decode($configuration['os_status_list'])) == 'true' ? 'checked' : ''; ?> name="os_status_list[]" class="marcar" type="checkbox" value="Orçamento"> <span class="lbl"> Or&ccedil;amento</span> </label>
                                </div>                                
                            </div>
                            <div class="form-actions">
                                <div class="span8">
                                    <div class="span9">
                                        <button type="submit" class="btn btn-primary">Salvar Altera&ccedil;&otilde;es</button>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>                    
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div id="modal-confirmaratualiza" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="<?php echo base_url() ?>index.php/clientes/excluir" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Atualiza&ccedil;&atilde;o de sistema</h5>
        </div>
        <div class="modal-body">
            <h5 style="text-align: left">Deseja realmente fazer a atualiza&ccedil;&atilde;o de sistema?</h5>
            <h7 style="text-align: left">Recomendamos que fa&ccedil;a um backup antes de prosseguir!</h7>
            <h7 style="text-align: left"><br>Fa&ccedil;a o backup dos seguintes arquivos pois os mesmo ser&atilde;o exclu&iacute;dos:</h7>
            <h7 style="text-align: left"><br>* ./assets/anexos</h7>
            <h7 style="text-align: left"><br>* ./assets/arquivos</h7>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            <button id="update-mapos" type="button" class="btn btn-danger"><i class="fas fa-sync-alt"></i>Atualizar</button>
        </div>
    </form>
</div>
<!-- Modal -->
<div id="modal-confirmabanco" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="<?php echo base_url() ?>index.php/clientes/excluir" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Atualiza&ccedil;&atilde;o de sistema</h5>
        </div>
        <div class="modal-body">
            <h5 style="text-align: left">Deseja realmente fazer a atualiza&ccedil;&atilde;o do banco de dados?</h5>
            <h7 style="text-align: left">Recomendamos que fa&ccedil;a um backup antes de prosseguir!
                <a target="_blank" title="Fazer Bakup" class="btn btn-mini btn-inverse" href="<?php echo site_url() ?>/mapos/backup">Fazer Backup</a>
            </h7>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            <button id="update-database" type="button" class="btn btn-warning"><i class="fas fa-sync-alt"></i>Atualizar</button>
        </div>
    </form>
</div>
<script>
    $('#update-database').click(function () {
        window.location = "<?= site_url('mapos/atualizarBanco') ?>"
    });
    $('#update-mapos').click(function() {
        window.location = "<?= site_url('mapos/atualizarMapos') ?>"
    });
    $(document).ready(function() {
        $('#notifica_whats_select').change(function() {
            if ($(this).val() != "0")
                document.getElementById("notifica_whats").value += $(this).val();
            $(this).prop('selectedIndex', 0);
        });
    });
</script>
