@extends('keke.skeleton')
@section('app')
@include('keke._header')
<div class="app-body">
    @include('keke._sidebar')
    <main class="main">
      @yield('content')
    </main>
  </div>
   @include('keke._footer')
@endsection
{{-- <div class="app-body">

  <main class="main">


    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="http://52.14.50.96/home">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="http://52.14.50.96/perfil/credentials">Credenciales</a>
      </li>
      <li class="breadcrumb-item active">Datos Personales</li>
    </ol>
    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <i class="fa fa-plus-square-o fa-lg"></i>
                <strong>Actualizar Datos Personales</strong>
              </div>
              <div class="card-body">
                <form method="POST" action="http://52.14.50.96/perfil/storePersonal" accept-charset="UTF-8"
                  id="form-credenciales" onsubmit="return validation()" autocomplete="off"
                  enctype="multipart/form-data"><input name="_token" type="hidden"
                    value="uXdNqnI9GqJKlcRCZpJQ7EYdb2ss8KS4bCOwOrH6">



                  <input name="id" type="hidden" value="73">



                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">

                        <div class="col-md-12">
                          <p>Favor completar sus datos personales:</p>
                        </div>





                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Nombre:</label>
                            <input class="form-control update-name set-value-storage" name="name" type="text"
                              value="Carlos">

                          </div>

                        </div>




                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Apellido:</label>
                            <input class="form-control update-last-name set-value-storage" name="last_name" type="text"
                              value="Orellana">
                          </div>
                        </div>



                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Identificador Number:</label>
                            <input class="form-control update-dni set-value-storage" name="dni" type="text"
                              value="001138">
                          </div>

                        </div>


                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Ciudad:</label>
                            <input class="form-control update-city set-value-storage" name="city" type="text"
                              value="San Bernardo">
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group">
                            <label>País:</label>
                            <select class="form-control update-country set-value-storage" name="country">
                              <option value="30">Alemania</option>
                              <option value="74">Angola</option>
                              <option value="66">Arabia Saudita</option>
                              <option value="71">Argelia</option>
                              <option value="43">Argentina</option>
                              <option value="42">Australia</option>
                              <option value="44">Austria</option>
                              <option value="64">Bangladesh</option>
                              <option value="51">Belgica</option>
                              <option value="82">Bielorrusia</option>
                              <option value="16">Bolivia</option>
                              <option value="2">Brasil</option>
                              <option value="77">Bulgaria</option>
                              <option value="3">Canada</option>
                              <option value="17">Colombia</option>
                              <option value="34">Corea del Sur</option>
                              <option value="8">Costa Rica</option>
                              <option value="79">Croacia</option>
                              <option value="29">Cuba</option>
                              <option value="1" selected="selected">Chile</option>
                              <option value="28">China</option>
                              <option value="46">Dinamarca</option>
                              <option value="18">Ecuador</option>
                              <option value="69">Egipto</option>
                              <option value="9">El Salvador</option>
                              <option value="40">Emiratos Arabes Unidos</option>
                              <option value="50">Escocia</option>
                              <option value="23">España</option>
                              <option value="7">Estados Unidos</option>
                              <option value="85">Estonia</option>
                              <option value="56">Filipinas</option>
                              <option value="49">Finlandia</option>
                              <option value="36">Francia</option>
                              <option value="54">Grecia</option>
                              <option value="10">Guatemala</option>
                              <option value="38">Holanda</option>
                              <option value="11">Honduras</option>
                              <option value="53">Hungria</option>
                              <option value="61">India</option>
                              <option value="58">Indonesia</option>
                              <option value="37">Inglaterra</option>
                              <option value="86">Irlanda</option>
                              <option value="78">Islandia</option>
                              <option value="67">Israel</option>
                              <option value="24">Italia</option>
                              <option value="31">Japon</option>
                              <option value="84">Letonia</option>
                              <option value="68">Libano</option>
                              <option value="83">Lituania</option>
                              <option value="57">Malasia</option>
                              <option value="72">Marruecos</option>
                              <option value="4">México</option>
                              <option value="12">Nicaragua</option>
                              <option value="73">Nigeria</option>
                              <option value="47">Noruega</option>
                              <option value="55">Nueva Zelanda</option>
                              <option value="65">Pakistan</option>
                              <option value="13">Panamá</option>
                              <option value="19">Paraguay</option>
                              <option value="20">Perú</option>
                              <option value="45">Polonia</option>
                              <option value="33">Portugal</option>
                              <option value="5">Puerto Rico</option>
                              <option value="41">Qatar</option>
                              <option value="14">Rep. Dominicana</option>
                              <option value="52">Republica Checa</option>
                              <option value="76">Rumania</option>
                              <option value="26">Rusia</option>
                              <option value="80">Serbia</option>
                              <option value="62">Singapur</option>
                              <option value="63">Sri Lanka</option>
                              <option value="75">Sudafrica</option>
                              <option value="48">Suecia</option>
                              <option value="39">Suiza</option>
                              <option value="59">Tailandia</option>
                              <option value="6">Trinidad y Tobago</option>
                              <option value="70">Tunez</option>
                              <option value="35">Turquia</option>
                              <option value="27">Ucrania</option>
                              <option value="81">Ucrania</option>
                              <option value="22">Uruguay</option>
                              <option value="21">Venezuela</option>
                              <option value="60">Vietnam</option>
                            </select>
                          </div>
                        </div>







                        <div class="col-md-12">

                          <table style="width: 100%">

                            <tr>
                              <td style="padding: 0 20px;">

                                <p style="text-align: left">


                                <div id="showErrorPassword" style="display:none; width:93% !important;"
                                  class="alert alert-warning">

                                  <span id="showErrorPasswordMsj"></span>

                                  <span class="closebtn"
                                    onclick="this.parentElement.style.display='none';">&times;</span>
                                </div>

                                </p>

                              </td>
                            </tr>


                          </table>

                        </div>

                        <input type="hidden" name="is_validated" value="1">

                        <div class="form-group col-md-12">
                          <input class="btn btn-primary" type="submit" value="Guardar">
                          <a href="http://52.14.50.96/perfil/credentials" class="btn btn-secondary">Cancelar</a>
                        </div>




                      </div>



                    </div>

                  </div>





                </form>



                <style type="text/css">
                  .alert-custom {
                    padding: 20px;
                    width: 100%;
                    background-color: #8BC34A;
                    /* Red */
                    color: white;
                    margin-bottom: 15px;
                    border-radius: 5px;
                    text-align: center;
                    font-size: 20px;
                  }


                  .mitable .input-group,
                  .mitable .height-force {
                    height: 34px !important;
                  }


                  .mitable input,
                  .mitable select {
                    text-transform: uppercase;
                  }

                  .div-custom {
                    vertical-align: middle;
                    padding: 10px;
                  }
                </style>



                <script type="text/javascript">





                  function validateField(FIELD, NOMBRE, CONTENEDOR) {



                    if (!FIELD || FIELD == false || FIELD == "false") {
                      $('#' + CONTENEDOR).show();
                      $('#' + CONTENEDOR + 'Msj').text(NOMBRE + " obligatorio. Favor ingresar uno válido");
                      console.log(NOMBRE + " --> " + FIELD, "FALSE");
                      return false;
                    }
                    else {
                      console.log(NOMBRE + " --> " + FIELD, "TRUE");
                      return true;
                    }

                  }





                  function validation() {

                    $('#showErrorPassword').hide();
                    $('#showErrorPasswordMsj').text("");


                    var name = $('[name=name]').val();
                    var last_name = $('[name=last_name]').val();
                    var dni = $('[name=dni]').val();
                    var city = $('[name=city]').val();
                    var country = $('[name=country]').val();
                    let regDirection = /^([a-zA-Z0-9]([a-zA-Z0-9,\s]{0,61}[a-zA-Z0-9]))+\s+[0-9]{1,10}$/;


                    if (!validateField(name)) {
                      $('#showErrorPassword').show();
                      $('#showErrorPasswordMsj').text("Debe ingresar un Nombre");
                      return false;
                    }



                    if (!validateField(last_name)) {
                      $('#showErrorPassword').show();
                      $('#showErrorPasswordMsj').text("Debe ingresar un Apellido");
                      return false;
                    }




                    if (!validateField(dni) && false) {
                      $('#showErrorPassword').show();
                      $('#showErrorPasswordMsj').text("Debe ingresar un Identificador");
                      return false;
                    }





                    if (!validateField(city)) {
                      $('#showErrorPassword').show();
                      $('#showErrorPasswordMsj').text("Debe ingresar una Ciudad");
                      return false;
                    }



                    if (!validateField(country)) {
                      $('#showErrorPassword').show();
                      $('#showErrorPasswordMsj').text("Debe ingresar un País");
                      return false;
                    }











                    return true;








                  }



                  function showPass() {
                    $(".update-password").prop("type", "text");
                    setTimeout(function () { $(".update-password").prop("type", "password"); }, 3000);
                  }


                  function showConfirmPass() {
                    $(".update-password-confirm").prop("type", "text");
                    setTimeout(function () { $(".update-password-confirm").prop("type", "password"); }, 3000);
                  }

                </script>










              </div>



              </center>




              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</main>
</div> --}}