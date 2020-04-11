@extends('template')

  <div class="sticky-top">

  </div>
  <div>
    <form class="form-inline flex-row-reverse mr-4">
      <select class="custom-select my-3 mr-sm-2" id="inlineFormCustomSelectPref">
        <option selected>Escolher</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Perfil</label>
    </form>
  </div>


  <div class="mb-1 pt-1 container">
    <h4 class="display-3">Enviar trabalho para outro avaliador</h4>
  </div>

  <div class="container">
    <p class="mt-5">Avaliador de destino</p>
    <div class="w-25 input-group mb-4">
      <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
      <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submeter</button>
    </div>



    <p class="text-center"> TRABALHOS QUE SERÃO ENVIADOS</p>
    <hr>
    <div>
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
            <td>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">Sim</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Não</label>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
            <td>
              <div class="custom-control custom-radio custom-control-inline">

                <input type="radio" id="customRadioInline3" name="customRadioInline3" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline3">Sim</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline4" name="customRadioInline3" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline4">Não</label>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
            <td colspan="2">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline6" name="customRadioInline5" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline6">Sim</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline7" name="customRadioInline5" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline7">Não</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="container">
      <p class="text-center mt-5"> TRABALHOS JÁ AVALIADOS (NÃO PODEM SER REENVIADOS)</p>
    </div>
    <hr>

    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"></th>
          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
        </tr>
      </tbody>
    </table>

    <div class="container">
      <button type="submit" class="btn btn-primary btn-lg mb-5 mt-3">Enviar</button>
      <button type="submit" class="btn btn-primary btn-lg mb-5 mt-3">Voltar</button>
    </div>
  </div>