<h1>Avalie</h1>

<form method="POST" action="processa.php" enctype="multipart/form-data">
  <div class="estrelas">
    <input type="radio" id="vazio" name="estrela" value="" checked>

    <label for="estrela_um"><i class="fa fa-star fa-3x"></i></label>
    <input type="radio" id="estrela_um" name="estrela" value="1">

    <label for="estrela_dois"><i class="fa fa-star fa-3x"></i></label>
    <input type="radio" id="estrela_dois" name="estrela" value="2">

    <label for="estrela_tres"><i class="fa fa-star fa-3x"></i></label>
    <input type="radio" id="estrela_tres" name="estrela" value="3">

    <label for="estrela_quatro"><i class="fa fa-star fa-3x"></i></label>
    <input type="radio" id="estrela_quatro" name="estrela" value="4">

    <label for="estrela_cinco"><i class="fa fa-star fa-3x"></i></label>
    <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

    <button class="btn_entrar" type="submit" name="btn_entrar" > Avalie </button>

  </div>
</form>
