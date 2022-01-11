<div class="row-fluid" style="margin-top: 0">
    <div class="span4">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </span>
                <h5>Relat&oacute;rios R&aacute;pidos</h5>
            </div>
            <div class="widget-content">
                <ul class="site-stats">
                    <li><a target="_blank" href="<?php echo base_url() ?>index.php/relatorios/financeiroRapid"><i class="fas fa-hand-holding-usd"></i> <small>Relat&oacute;rio do m&ecirc;s - pdf</small></a></li>
                    <li><a target="_blank" href="<?php echo base_url() ?>index.php/relatorios/financeiroRapid?format=xls"><i class="fas fa-hand-holding-usd"></i> <small>Relat&oacute;rio do m&ecirc;s - xls</small></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="span8">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </span>
                <h5>Relat&oacute;rios Customiz&aacute;veis</h5>
            </div>
            <div class="widget-content">
                <form target="_blank" action="<?php echo base_url() ?>index.php/relatorios/financeiroCustom" method="get">
                    <div class="span12 well">

                        <div class="span6">
                            <label for="">Vencimento de:</label>
                            <input type="date" name="dataInicial" class="span12" />
                        </div>
                        <div class="span6">
                            <label for="">at&eacute;:</label>
                            <input type="date" name="dataFinal" class="span12" />
                        </div>

                    </div>

                    <div class="span12 well" style="margin-left: 0">
                        <div class="span6">
                            <label for="">Tipo:</label>
                            <select name="tipo" class="span12">
                                <option value="todos">Todos</option>
                                <option value="receita">Receita</option>
                                <option value="despesa">Despesa</option>
                            </select>
                        </div>
                        <div class="span6">
                            <label for="">Situa&ccedil;&atilde;o:</label>
                            <select name="situacao" class="span12">
                                <option value="todos">Todos</option>
                                <option value="pago">Pago</option>
                                <option value="pendente">Pendente</option>
                            </select>
                        </div>
                    </div>

                    <div class="span12 well" style="margin-left: 0">
                        <div class="span12">
                            <label for="">Tipo de impress&atilde;o:</label>
                            <select name="format" class="span12">
                                <option value="">PDF</option>
                                <option value="xls">XLS</option>
                            </select>
                        </div>
                    </div>

                    <div class="span12" style="margin-left: 0; text-align: center">
                        <input type="reset" class="btn" value="Limpar" />
                        <button class="btn btn-inverse"><i class="fas fa-print"></i> Imprimir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
