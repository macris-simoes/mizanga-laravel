@extends('template')

@section('content')


<style>
	html,
	body {
		height: 100%;
	}

	.flex-container {
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	body {
		display: flex;
		min-height: 100vh;
		flex-direction: column;
	}

	main {
		flex: 1 0 auto;
	}
</style>

<body>
	<main>
		<div class="flex-container">
			<div class="col-lg-4 col-sm-6 py-5 px-4 shadow-lg bg-lightrounded">
				<img class="mx-auto d-block mb-5" src="img/logoMZ.png" alt="icone usuario" style="height: 80px;">
				<form method="post">
					@csrf
					@if(session('mensagem'))
						<div class="alert alert-danger">{{session('mensagem')}}</div>
					@endif
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" required>
						<div class="invalid-feedback">Digite um usuário válido</div>
					</div>

					<div class="form-group">
						<label for="password">Senha</label>
						<input type="password" class="form-control" id="password" name="password" required>
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
								Matenha-me conectado
							</label>
						</div>
					</div>
					{{-- <a href="/inscrito-home" class="btn btn-primary btn-block" type="submit">Login</a> --}}
					<button type="submit" class="btn btn-primary btn-block">Entrar</button>
				</form>
				<small>Ainda não tem cadastro? <a href="/instrucoes-inscricao">Clique aqui e faça a sua inscrição.</a></small>
			</div>
		</div>
	</main>

@endsection