
<link rel="stylesheet" type="text/css" href="./css/style.css">
<br><br>
<footer class="footer">
<section class="footer_container container">
<nav class="nav nav--footer">
<h2 class="footer_title">Agencia de Citas</h2>
<ul class="nav_link nav_link--footer">
    <li class="nav_items">
        <a href="http://localhost/prototypePHP/index.php" class="nav_links" id="fin">Inicio</a>
    </li><br><br>
    <li class="nav_items">
        <a href="http://localhost/prototypePHP/Views/formulario.php" class="nav_links">Registro</a>
    </li><li class="nav_items">
        <a href="http://localhost/prototypePHP/Controller/consulta.php" class="nav_links">Consulta</a>
    </li>
    <li class="nav_items">
        <a href="#r" class="nav_links">Contacto</a>
    </li>
    <li class="nav_items">
        <a href="#codigo" class="nav_links">Agenda</a>
    </li>  
</ul>
</nav>
<form  class="footer_form">
    <h2 class="footer_newsletter">¡Nuestra Atención es Primordial!</h2>
</form>

</section>
<section class="footer_copy container">
    <div class="footer_social">
        <a href="https://www.facebook.com/cefahuila" class="footer_icons"><img src="./img/svg/facebook.svg" class="footer_img"></a>
        <a href="https://twitter.com/CEFAcomunica" class="footer_icons"><img src="./img/svg/twiter.svg" class="footer_img"></a>
    </div>
    <h3 class="footer_copyright">Derechos Reservados &copy; Yuderly Sapuy</h3>
</section>
</footer>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<!-- jQuery -->
<script src="Library/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Library/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="Library/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="Library/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="Library/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="Library/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="Library/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="Library/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="Library/AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="Library/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="Library/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="Library/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="Library/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="Library/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="Library/AdminLTE/dist/js/adminlte.min.js"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

</body>
</html>