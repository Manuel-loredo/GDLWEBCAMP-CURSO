<footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre <span>gdlwebcamp</span></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis facere vel accusantium dolorem mollitia consectetur aliquam repellat aspernatur sit atque reiciendis nam, labore commodi, cumque sequi aperiam quas excepturi. Aperiam!</p>

      </div>
      <div class="ultimos-tweets">
          <h3>ultimos<span>tweets</span></h3>
          <ul>
            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem qui reiciendis similique dolor earum ex temporibus, incidunt perferendis atque aperiam mollitia. Quam, in animi eaque quia voluptate eveniet unde iusto.</li>
            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem qui reiciendis similique dolor earum ex temporibus, incidunt perferendis atque aperiam mollitia. Quam, in animi eaque quia voluptate eveniet unde iusto.</li>
            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem qui reiciendis similique dolor earum ex temporibus, incidunt perferendis atque aperiam mollitia. Quam, in animi eaque quia voluptate eveniet unde iusto.</li>
          </ul>
      </div>
      <div class="menu">
          <h3>redes<span>sociales</span></h3>
          <nav class="redes-sociales">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-pinterest"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </nav>
      </div>
    
    </div>
  <p class="copyright">
    Todos Los Derechos Reservados <span>ING. Jesus Manuel Loredo Sauceda.</span>
  </p>
  </footer>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <?php  
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados' || $pagina == 'index') {
      echo '<script src="js/jquery.colorbox-min.js"></script>';
      echo '<script src="js/jquery.waypoints.min.js"></script>';
    }else if($pagina == 'conferencia') {
      echo '<script src="js/lightbox.js"></script>';
    }
  ?>
  <script src="js/cotizador.js"></script>
  <script src="js/main.js"></script>
  

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <?php
	// Guarda todo el contenido a un archivo
	$fp = fopen($archivoCache, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// Enviar al navegador
	ob_end_flush();
?>
</body>

</html>
