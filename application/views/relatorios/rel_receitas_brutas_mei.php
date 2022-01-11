<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />

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
                    <li><a target="_blank" href="<?php echo base_url() ?>index.php/relatorios/receitasBrutasRapid?format=docx"><i class="fas fa-shopping-bag"></i> <small>Receitas Brutas MEI - m&ecirc;s atual - docx</small></a></li>
                    <li><a target="_blank" href="<?php echo base_url() ?>index.php/relatorios/receitasBrutasRapid?format=pdf"><i class="fas fa-shopping-bag"></i> <small>Receitas Brutas MEI - m&ecirc;s atual - pdf</small></a></li>
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
                <form target="_blank" action="<?php echo base_url() ?>index.php/relatorios/receitasBrutasCustom" method="get">
                    <div class="span12 well">
                        <div class="span6">
                            <label for="">Data de ocorr&ecirc;ncia de:</label>
                            <input type="date" name="dataInicial" class="span12" />
                        </div>
                        <div class="span6">
                            <label for="">at&eacute;:</label>
                            <input type="date" name="dataFinal" class="span12" />
                        </div>
                    </div>

                    <div class="span12 well" style="margin-left: 0">
                        <div class="span12">
                            <label for="">Tipo de impress&atilde;o:</label>
                            <select name="format" class="span12">
                                <option value="pdf">PDF</option>
                                <option value="docx">DOCX</option>
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
</div>
<script src="<?php echo base_url(); ?>assets/js/maskmoney.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
