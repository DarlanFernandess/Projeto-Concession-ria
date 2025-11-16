<h1>Cadastrar Venda</h1>
<form action="?page=salvar-venda" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	
	<div class="mb-3">
		<label>Data da Venda
			<input type="date" name="data_venda" class="form-control" required>
		</label>
	</div>
	
	<div class="mb-3">
		<label>Valor da Venda
			<input type="number" name="valor_venda" step="0.01" class="form-control" required>
		</label>
	</div>
	
	<div class="mb-3">
		<label>Funcionário Responsável
			<select name="funcionario_id" class="form-control" required>
				<option>-= Escolha =-</option>
				<?php
					$sql_func = "SELECT * FROM funcionario";
					$res_func = $conn->query($sql_func);
					$qtd_func = $res_func->num_rows;
					if ($qtd_func > 0){
						while($row_func = $res_func->fetch_object()){
							print "<option value='{$row_func->id_funcionario}'>{$row_func->nome_funcionario}</option>";
						}
					}else{
						print "<option>Não há funcionários cadastrados</option>";
					}
				?>
			</select>
		</label>
	</div>
	
	<div class="mb-3">
		<label>Modelo do Veículo
			<select name="modelo_id" class="form-control" required>
				<option>-= Escolha =-</option>
				<?php
					$sql_modelo = "SELECT * FROM modelo";
					$res_modelo = $conn->query($sql_modelo);
					$qtd_modelo = $res_modelo->num_rows;
					if ($qtd_modelo > 0){
						while($row_modelo = $res_modelo->fetch_object()){
							print "<option value='{$row_modelo->id_modelo}'>{$row_modelo->nome_modelo}</option>";
						}
					}else{
						print "<option>Não há modelos cadastrados</option>";
					}
				?>
			</select>
		</label>
	</div>
	
	<div class="mb-3">
		<label>Cliente
			<select name="cliente_id" class="form-control" required>
				<option>-= Escolha =-</option>
				<?php
					$sql_cliente = "SELECT * FROM cliente";
					$res_cliente = $conn->query($sql_cliente);
					$qtd_cliente = $res_cliente->num_rows;
					if ($qtd_cliente > 0){
						while($row_cliente = $res_cliente->fetch_object()){
							print "<option value='{$row_cliente->id_cliente}'>{$row_cliente->nome_cliente}</option>";
						}
					}else{
						print "<option>Não há clientes cadastrados</option>";
					}
				?>
			</select>
		</label>
	</div>
	
	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>