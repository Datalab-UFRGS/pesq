<?php include "inc/config.php" ?>

<footer class="sitefooter">

  <?php if ($instituicao == "UFRGS") : ?>

  <div class="sitefooter-size sitefooter-logos">
    <a href="https://ufrgs.br/datalab" target="_blank" class="sitefooter-link sitefooter-size" title="Visite o site da UFRGS">
      <i class="i i-datalab" alt="Laboratório de dados, métricas institucionais e reprodutibilidade Científica"></i>
    </a>
    <a href="https://ufrgs.br/" target="_blank" class="sitefooter-link sitefooter-size" title="Visite o site da UFRGS">
      <i class="i i-ufrgs" alt="Universidade Federal do Rio Grande do Sul"></i>
    </a>
  </div>
  <p class="developed-by">Software livre desenvolvido originalmente pela Universidade Federal do Rio Grande do Sul</p>

  <?php else : ?>

    <a class="sitefooter-link" href="inclusao.php">Inclusão</a>

  <?php endif ?>

  <div class="sitefooter-contacts sitefooter-size">
    <a class="sitefooter-link" target="_blank" href="https://www.ufrgs.br/datalab/fale-conosco/">
      Fale conosco</a>
    <a class="sitefooter-link" target="_blank" href="http://www.ufrgs.br/ufrgs/politica-de-privacidade">
      Política de privacidade</a>
    <!-- <a class="sitefooter-link" target="_blank" href="https://forms.gle/2QRcqg2YfxMvEqVX9">
      Relate erros</a> -->
  </div>
</footer>