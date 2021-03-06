<div class="row-fluid" style="margin-top: 0">
    <div class="span4">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="fas fa-shopping-bag"></i>
                </span>
                <h5>Relat&oacute;rios R&aacute;pidos</h5>
            </div>
            <div class="widget-content">
                <ul class="site-stats">
                    <li><a target="_blank" href="<?php echo base_url() ?>index.php/relatorios/produtosRapid"><i class="fas fa-shopping-bag"></i> <small>Todos os Produtos</small></a></li>
                    <li><a target="_blank" href="<?php echo base_url() ?>index.php/relatorios/produtosRapidMin"><i class="fas fa-shopping-bag"></i> <small>Com Estoque M&iacute;nimo</small></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="span8">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="fas fa-shopping-bag"></i>
                </span>
                <h5>Relat&oacute;rios Customiz&aacute;veis</h5>
            </div>
            <div class="widget-content">
                <div class="span12 well">
                    <div class="span12 alert alert-info">Deixe em branco caso n&atilde;o deseje utilizar o par&acirc;metro.</div>
                    <form target="_blank" action="<?php echo base_url() ?>index.php/relatorios/produtosCustom" method="get">
                        <div class="span12 well">
                            <div class="span6">
                                <label for="">Pre&ccedil;o de Venda de:</label>
                                <input type="text" name="precoInicial" class="span12 money" />
                            </div>
                            <div class="span6">
                                <label for="">at&eacute;:</label>
                                <input type="text" name="precoFinal" class="span12 money" />
                            </div>
                        </div>
                        <div class="span12 well" style="margin-left: 0">
                            <div class="span6">
                                <label for="">Estoque de:</label>
                                <input type="text" name="estoqueInicial" class="span12" />
                            </div>
                            <div class="span6">
                                <label for="">at&eacute;:</label>
                                <input type="text" name="estoqueFinal" class="span12" />
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
</div>
<script src="<?php echo base_url(); ?>assets/js/maskmoney.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".money").maskMoney();
    });
</script>
