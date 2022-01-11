<div class="section text-center">
  <div class="clearfix">

    <?php if (!$installed) : ?>

      <i class="status fa fa-check-circle-o" style="font-size: 50px;"></i>
      <br />

      <span style="line-height: 50px;">Parab&eacute;ns! Voc&ecirc; instalou o
        <strong><?php echo($settings['title']); ?></strong> com sucesso!
      </span>

      <div style="margin: 15px 0 15px 0px; color: #d73b3b;">
        N&atilde;o esque&ccedil;a de deletar seu diret&oacute;rio de instala&ccedil;&atilde;o.
      </div>

      <?php else : ?>

        <i class="status fa fa-close" style="font-size: 50px; color:red;"></i>
        <br />

        <div style="margin: 15px 0 15px 0px; color: #d73b3b;">
          Parece que este aplicativo j&aacute; est&aacute; instalado! Voc&ecirc; n&atilde;o pode reinstal&aacute;-lo novamente.
        </div>

      <?php endif; ?>

      <a class="go-to-login-page" href="<?php echo $dashboard_url; ?>">
        <div>
          <div style="font-size: 100px;"><i class="fa fa-desktop"></i></div>
          <div>IR PARA P&Aacute;GINA DE LOGIN</div>
        </div>
      </a>

    </div>
  </div>
