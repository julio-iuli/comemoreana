<?php
	include 'conectacomemore.php';
	

	//function inserirClienteEEnderecoSituacao1(){
	//	include 'conectacomemore.php';
		
	$ds_cliente = $_REQUEST['ds_cliente'];
	$ds_ddd_res = $_REQUEST['ds_ddd_res'];
	$ds_telefone_res = $_REQUEST['ds_telefone_res'];
	$ds_ddd_cel = $_REQUEST['ds_ddd_cel'];
	$ds_telefone_cel = $_REQUEST['ds_telefone_cel'];
	$ds_rg = $_REQUEST['ds_rg'];
	$ds_emissor_rg = $_REQUEST['ds_emissor_rg'];
	$ds_cpf = $_REQUEST['ds_cpf'];
	$ds_cnpj = $_REQUEST['ds_cnpj'];
	$ds_pf_pj = $_REQUEST['ds_pf_pj'];
	$ds_email = $_REQUEST['ds_email'];
	$ds_data_nasc = $_REQUEST['ds_data_nasc'];
	$ds_end_complemento = $_REQUEST['ds_end_complemento'];
	$ds_recomendacao_nome = $_REQUEST['ds_recomendacao_nome'];
	$ds_recomendacao_data_nasc = $_REQUEST['ds_recomendacao_data_nasc'];
		
	$id_uf = $_REQUEST['id_uf'];
	$ds_cidade = $_REQUEST['ds_cidade'];
	$id_cidade = $_REQUEST['id_cidade'];
	$ds_bairro = $_REQUEST['ds_bairro'];
	$id_bairro = $_REQUEST['id_bairro'];
	$ds_logradouro = $_REQUEST['ds_logradouro'];
	$id_logradouro = $_REQUEST['id_logradouro'];
	$ds_cep = $_REQUEST['ds_cep'];
	
		//Situação 1 : cidade nova (e, consequentemente, bairro, logradouro, cep) => id_cidade vazio
		//Situação 2 : bairro novo (e, consequentemente, logradouro, cep) => id_bairro vazio
		//Situação 3 : logadouro novo (e, consequentemente, cep) => id_logradouro vazio
		//Situação 4 : apenas complemento novo.
		
		if($id_logradouro != ""){echo "situação 4: id_logradouro = " . $id_logradouro;}
		
		else if($id_bairro != ""){echo "situação 3: id_bairro = " . $id_bairro;}
		
		else if($id_cidade != ""){echo "situação 2: id_cidade = " . $id_cidade;}
		
		else if($id_cidade == "") {echo "situação 4: ds_cidade = " . $ds_cidade;}
/*		
		try {
		$stmt = $con->prepare('
			insert into tb_cidade (ds_cidade, tb_uf_id_uf) value (:ds_cidade, :id_uf);
			insert into tb_bairro (ds_bairro, tb_cidade_id_cidade) value (:ds_bairro, last_insert_id());
			insert into tb_logradouro (ds_logradouro, ds_cep, tb_bairro_id_bairro) value (:ds_logradouro, :ds_cep, last_insert_id());
			
			insert into tb_cliente (
			ds_cliente, 
			ds_ddd_res, ds_telefone_res, 
			ds_ddd_cel, ds_telefone_cel, 
			ds_rg, ds_emissor_rg, 
			ds_cpf, ds_cnpj, ds_pf_pj, 
			ds_email, ds_data_nasc,
			ds_end_complemento, 
			ds_recomendacao_nome, 
			ds_recomendacao_data_nasc, 
			tb_logradouro_id_logradouro) 
			
			value (
			:ds_cliente, 
			:ds_ddd_res, 
			:ds_telefone_res, 
			:ds_ddd_cel, 
			:ds_telefone_cel, 
			:ds_rg, 
			:ds_emissor_rg, 
			:ds_cpf, 
			:ds_cnpj, 
			:ds_pf_pj, 
			:ds_email, 
			:ds_data_nasc,
			:ds_end_complemento, 
			:ds_recomendacao_nome, 
			:ds_recomendacao_data_nasc,
			last_insert_id());
		');
		$stmt->execute(array(
			':id_uf' => $id_uf,
			':ds_cidade' => $ds_cidade,
			':ds_bairro' => $ds_bairro,
			':ds_logradouro' => $ds_logradouro,
			':ds_cep' => $ds_cep,
			
			':ds_cliente' => $ds_cliente, 
			':ds_ddd_res' => $ds_ddd_res, 
			':ds_telefone_res' => $ds_telefone_res, 
			':ds_ddd_cel' => $ds_ddd_cel, 
			':ds_telefone_cel' => $ds_telefone_cel, 
			':ds_rg' => $ds_rg, 
			':ds_emissor_rg' => $ds_emissor_rg, 
			':ds_cpf' => $ds_cpf, 
			':ds_cnpj' => $ds_cnpj, 
			':ds_pf_pj' => $ds_pf_pj, 
			':ds_email' => $ds_email, 
			':ds_data_nasc' => $ds_data_nasc,
			':ds_end_complemento' => $ds_end_complemento, 
			':ds_recomendacao_nome' => $ds_recomendacao_nome, 
			':ds_recomendacao_data_nasc' => $ds_recomendacao_data_nasc
		));
		
		echo "final do try: veja se salvou no banco";
		
		} catch(PDOException $e) {
			echo $e;
		}
*/	
	
	
	
?>