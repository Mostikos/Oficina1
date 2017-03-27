@extends('main')

@section('content')
<div class="fullwidth-block content">
					<div class="container">
						
						
						<div class="row">
							<div class="col-md-6 formcolor">
							<h2 >Login:</h2>
								<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn botaoRegLogin">Entrar</button>
    </div>
  </div>
</form>



							</div>
							

				<div class="col-md-6">
								<hr class="visible-xs visible-sm" style="border-bottom:1px solid black; border-top:1px solid white; border-left:1px solid white; border-right:1px solid white; padding-top:20px;">
															<h2 >Registo:</h2>
								<form class="form-horizontal">
<div class="form-group">
	<label for="inputRegNome" class="col-sm-2 control-label">Nome</label>
	<div class="col-sm-10">
	<input type="text" class="form-control" id="inputRegNome" placeholder="Nome">
	</div>
</div>
<div class="form-group">
  <label for="inputRegContacto" class="col-sm-2 control-label">Contacto</label>
  <div class="col-sm-10">
  <input type="text" class="form-control" id="inputRegContacto" placeholder="Contactos">
  </div>
</div>
<div class="form-group">
  <label for="inputRegMorada" class="col-sm-2 control-label">Nome</label>
  <div class="col-sm-10">
  <input type="text" class="form-control" id="inputRegMorada" placeholder="Morada">
  </div>
</div>

  <div class="form-group">
    <label for="inputRegEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputRegEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputRegPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputRegPassword" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputRegcPassword" class="col-sm-2 control-label">Confirmar Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputRegCPassword" placeholder="Confirmar Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn botaoRegLogin">Registar</button>
    </div>
  </div>
</form>
							</div>
						</div>
					</div>
				</div>



@endsection