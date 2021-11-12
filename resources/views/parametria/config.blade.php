@extends('layouts.app')
@section('content')
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Personalización de Sistema</a></li>
  </ol>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Personalización de Sistema</h2><br />
    </div>
    <div class="card-body">
      <form>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Idioma Sistema</label>
          <div class="col-md-3 mb-3">
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Moneda Sistema</label>
          <div class="col-md-3 mb-3">
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">País</label>
          <div class="col-md-3 mb-3">
            <select class="form-control update-country set-value-storage" name="country">
                     <option value="30">Alemania</option><option value="74">Angola</option>
                     <option value="66">Arabia Saudita</option><option value="71">Argelia</option>
                     <option value="43">Argentina</option><option value="42">Australia</option>
                     <option value="44">Austria</option><option value="64">Bangladesh</option>
                     <option value="51">Belgica</option><option value="82">Bielorrusia</option>
                     <option value="16">Bolivia</option><option value="2">Brasil</option>
                     <option value="77">Bulgaria</option><option value="3">Canada</option>
                     <option value="17">Colombia</option><option value="34">Corea del Sur</option>
                     <option value="8">Costa Rica</option><option value="79">Croacia</option>
                     <option value="29">Cuba</option><option value="1">Chile</option>
                     <option value="28">China</option><option value="46">Dinamarca</option>
                     <option value="18">Ecuador</option><option value="69">Egipto</option>
                     <option value="9">El Salvador</option><option value="40">Emiratos Arabes Unidos</option>
                     <option value="50">Escocia</option><option value="23">España</option>
                     <option value="7">Estados Unidos</option><option value="85">Estonia</option>
                     <option value="56">Filipinas</option><option value="49">Finlandia</option>
                     <option value="36">Francia</option><option value="54">Grecia</option>
                     <option value="10">Guatemala</option><option value="38">Holanda</option>
                     <option value="11">Honduras</option><option value="53">Hungria</option>
                     <option value="61">India</option><option value="58">Indonesia</option>
                     <option value="37">Inglaterra</option><option value="86">Irlanda</option>
                     <option value="78">Islandia</option><option value="67">Israel</option>
                     <option value="24">Italia</option><option value="31">Japon</option>
                     <option value="84">Letonia</option><option value="68">Libano</option>
                     <option value="83">Lituania</option><option value="57">Malasia</option>
                     <option value="72">Marruecos</option><option value="4">México</option>
                     <option value="12">Nicaragua</option><option value="73">Nigeria</option>
                     <option value="47">Noruega</option><option value="55">Nueva Zelanda</option>
                     <option value="65">Pakistan</option><option value="13">Panamá</option>
                     <option value="19">Paraguay</option><option value="20">Perú</option>
                     <option value="45">Polonia</option><option value="33">Portugal</option>
                     <option value="5">Puerto Rico</option><option value="41">Qatar</option>
                     <option value="14">Rep. Dominicana</option><option value="52">Republica Checa</option>
                     <option value="76">Rumania</option><option value="26">Rusia</option><option value="80">Serbia</option>
                     <option value="62">Singapur</option><option value="63">Sri Lanka</option><option value="75">Sudafrica</option>
                     <option value="48">Suecia</option><option value="39">Suiza</option><option value="59">Tailandia</option>
                     <option value="6">Trinidad y Tobago</option><option value="70">Tunez</option><option value="35">Turquia</option>
                     <option value="27">Ucrania</option><option value="81">Ucrania</option><option value="22">Uruguay</option>
                     <option value="21">Venezuela</option><option value="60">Vietnam</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Configuración Reginal</label>
          <div class="col-md-3 mb-3">
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-2 col-form-label" for="text-input">Nombre Empresa</label>
          <div class="col-md-3 mb-3">
            <input class="form-control" id="text-input" type="text" name="text-input" placeholder="">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-2 col-form-label" for="file-input">Logo</label>
          <div class="col-md-9">
            <input id="file-input" type="file" name="file-input">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Adinistrar Colores</label>
          <div class="col-md-3 mb-3">
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>
        <a class="btn btn-primary" href="" role="button">Guardar Cambios</a>



      </form>
    </div>
  </div>
</div>
@endsection