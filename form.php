<form class="custom-form">
  <h2 class="title"><?php the_field("titulo-form");?></h2>
  <div class="row">
    <div class="col-md-6">
      <input type="text" placeholder="Seu nome" required>
    </div>

    <div class="col-md-6">
      <input class="cep" type="text" placeholder="CEP" required>
    </div>

    <div class="col-md-6">
      <input type="email" placeholder="Seu e-mail" required>
    </div>

    <div class="col-md-4">
      <input type="text" placeholder="Endereço" required>
    </div>

    <div class="col-md-2">
      <input type="number" placeholder="Número" required>
    </div>

    <div class="col-md-6">
      <input class="telefone" type="tel" placeholder="Seu telefone" required>
    </div>

    <div class="col-md-6">
      <input type="text" placeholder="Bairro" required>
    </div>

    <div class="col-md-6">
      <input type="date" placeholder="Data de nascimento" required>
    </div>

    <div class="col-md-4">
      <input type="text" placeholder="Cidade" required>
    </div>

    <div class="col-md-2">
      <input type="text" placeholder="Estado" required>
    </div>
  </div>

  <div class="validation"></div>
  <button class="custom-btn custom-btn--color" type="submit">Enviar Dados</button>
</form>