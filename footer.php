    </main>
    <footer class="
  <?php
  if (isset($_COOKIE['046_theme'])) {
    if (strcmp($_COOKIE['046_theme'], "purple") === 0) {
    } elseif (strcmp($_COOKIE['046_theme'], "blue") === 0) {
      echo "extraTheme1";
    } elseif (strcmp($_COOKIE['046_theme'], "orange") === 0) {
      echo "extraTheme2";
    }
  } ?> footer text-center text-lg-start text-muted">
      <section class="d-flex justify-content-center justify-content-lg-between p-4">
        <div class="me-5 d-none d-lg-block">
          <span>Get informed with our manuals:</span>
        </div>
        <div>
          <a href="/student046/dwes/manual/developer_manual.php" class="me-4 text-reset"><i>Developer Manual</i></a>
          <a href="#" class="me-4 text-reset"><i>User Manual</i></a>
          <a href="/student046/dwes/manual/installation_manual.php" class="me-4 text-reset"><i>Installation Manual</i></a>
          <a href="/student046/dwes/manual/reflexinFinal.php" class="me-4 text-reset"><i>Reflexion Final</i></a>
        </div>
      </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>