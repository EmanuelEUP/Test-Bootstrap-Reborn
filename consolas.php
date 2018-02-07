

<?php require("./header.php"); ?>

<!-- ===================== CONTENIDO  -->

<form>

<div id ="ID_BARRAMENU">

    <div class ="container my-1">

            <div class ="row">

                <div class ="col-12">

                    <div class="d-inline-block float-right">
                     
                    <input type="image" src="./img/clipboard.png" width="32" height="32" onclick="FNC_SHOW01(); return false;"  />
                    <input type="image" src="./img/plus.png" width="32" height="32" onclick="FNC_SHOW02(); return false;"  />
                    <input type="image" src="./img/delete.png" width="32" height="32" onclick="FNC_CONFIRM(); return false;"  />

                   <!-- <button id="ID_BTN01" class="btn_add" onclick="console.log('hola');" > ACCION</button>-->

                    </div>

                </div>

            </div>
    </div>

</div>



<div id ="ID_LISTA"  >

<div class ="container">

            <div class ="row">

                <div class ="col-12">

                <img src="./img/Tit_listconsolas.png" class="img-fluid mb-3" width="400" height="50" />

                </div>

            </div>

        <div class ="row">

            <div class ="col-md-6 col-lg-8">

        
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
         

            </div>

            <div class="col-md-6 col-lg-4  d-none d-sm-none d-md-block ">

            <img src="./img/scorpion.png" class="img-fluid float-right"  width="270" height="270" />

            </div>

        </div>
</div>

</div>

<div id ="ID_REGISTRO" class="UTIL_display_none">

<div class ="container">

            <div class ="row">

                <div class ="col-12">

                <img src="./img/Tit_regconsolas.png" class="img-fluid mb-3" width="400" height="50" />

                </div>

            </div>

        <div class ="row">

            <div class ="col-md-6 col-lg-8">

        

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Fecha Ing :</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Fecha de Presentación">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre :</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Nombre Consola">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Compañia :</label>
              <div class="col-sm-10">
              <select class="form-control" id="exampleFormControlSelect1" placeholder="Seleccione Compañia">
                <option>Seleccione...</option>
                <option>XBOX</option>
                <option>SONY</option>
                <option>MICROSOFT</option> 
              </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Descripción : </label>
              <div class="col-sm-10">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Ingrese descripción"></textarea>
              </div>
            </div>            

            <div class="form-group row">
              <div class="col-sm-2 offset-sm-10   d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-md">AÑADIR</button>
              </div>
            </div>

         

            </div>

            <div class="col-md-6 col-lg-4  d-none d-sm-none d-md-block ">

            <img src="./img/Sub_zero.png" class="img-fluid float-right"  width="270" height="270" />

            </div>

        </div>
</div>

</div>


 
</form>


<!-- ===================== CONTENIDO  -->

<?php require("./footer.php"); ?>