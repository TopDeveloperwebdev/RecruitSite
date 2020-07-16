<form method="POST" action="return.php" id="myForm">
	<div id="wizard">
		<!-- SECTION 1 -->
		<h4></h4>

		<section>
			<div class="form-row">
				<div class="form-holder descript-div">
					Marque os itens que você considera que fazem parte do seu temperamento.
					Se não souber o significado de alguma palavra, pesquise-a em um dicionário.
					Não é necessário pensar muito, marque pela sua intuição.
					Lembre-se, não marque o que você gostaria de ser, mas sim, aquilo que você realmente é.
					Analise tanto os seus pontos positivos como os seus pontos negativos e seja o mais sincero possível.
				</div>
			</div>
			<div class="form-row form-group">
				<div class="form-holder">
					<label for="">
						Full Name *
					</label>
					<input type="text" class="form-control" name="nome">
				</div>
				<div class="form-holder">
					<label for="">
						Email *
					</label>
					<input type="email" class="form-control" name="email">
				</div>
			</div>
			<div class="form-row">
				<label for="">
					Phone *
				</label>
				<input type="phone" class="form-control" name="phone" name="telefone">
			</div>

			<div class="form-row">
				<label for="">
					CPF *
				</label>
				<input type="text" class="form-control" name="cpf">
			</div>
			<div class="form-row">
				<label for="">
					Sex *
				</label>
				<div class="checkbox-circle">
					<label class="active">
						<input type="radio" name="billing method" value="Direct bank transfer" name="sexo">Male</input>
						<span class="checkmark"></span>
					</label>
					<label>
						<input type="radio" name="billing method" value="Check payments" name="sexo">Female</input>
						<span class="checkmark"></span>
					</label>
				</div>
			</div>
		</section>

		<!-- SECTION 2 -->
		<h4></h4>
		<section>
			<div class="form-holder descript-div">
				Leia as instruções com atenção: <br>
				1) Esta pesquisa é individual, não solicite apoio de outra pessoa para não prejudicar o resultado.<br>
				2) Não interrompa o questionário com distrações ou conversas. Não discuta o questionário com pessoas à sua volta.<br>
				3) Seja sincero, o objetivo da pesquisa não é qualificar ou desqualificar.<br>
				4) Reserve pelo menos 15 minutos para responder ao questionário sem interrupções.<br>
				5) Mais instruções nas próximas páginas.<br>
			</div>
			<div class="categorys-section">
				<?php
				include("./data/category1.php");
				foreach ($categorys1 as $key => $item) : ?>
					<div class='form-row category category1'>
						<div class='checkbox'>
							<label>
								<input type='checkbox' name='<?php echo $item; ?>' value="ON">
								<?php echo $item; ?>
								<span class='checkmark'></span>
							</label>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>


		<!-- SECTION 2 -->
		<h4></h4>
		<section>
			<div class="form-holder descript-div">
				Marque agora a forma como as outras pessoas pensam que você deve (ou precisa) ser para ter um desempenho melhor.
			</div>
			<div class="categorys-section">
				<?php
				include("./data/category2.php");
				foreach ($categorys2 as $key => $item) : ?>
					<div class='form-row category category2'>
						<div class='checkbox'>
							<label>
								<input type='checkbox' name='<?php echo $item; ?>' value="ON">
								<?php echo $item; ?>
								<span class='checkmark'></span>
							</label>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>

	</div>
</form>