<?php

	 include 'config.inc.php';

    // Innitialize Variable
    $nome = $_POST['nome']; 
    $cpf = $_POST['cpf'];
    $estadoCivil = $_POST['estadoCivil']; 
    $sexo = $_POST['sexo'];
    $rg = $_POST['rg'];
    $ufRG = $_POST['ufRG'];
    $dataEmissaoRG = $_POST['dataEmissaoRG'];
    $dataNascimento = $_POST['dataNascimento'];
    $naturalidade = $_POST['naturalidade'];
    $ufNascimento = $_POST['ufNascimento'];
    $nomePai = $_POST['nomePai'];
    $nomeMae = $_POST['nomeMae'];
    $codigoCNH = $_POST['codigoCNH'];
    $registroCNH = $_POST['registroCNH'];
    $ufCNH = $_POST['ufCNH'];
    $dataEmissaoCNH = $_POST['dataEmissaoCNH'];
    $primeiraEmissaoCNH = $_POST['primeiraEmissaoCNH'];
    $categoria = $_POST['categoria'];
    $validadeCNH = $_POST['validadeCNH'];
    $segurancaCNH = $_POST['segurancaCNH'];
    $enderecoPessoal = $_POST['enderecoPessoal'];
    $numeroEnderecoPessoal = $_POST['numeroEnderecoPessoal'];
    $complementoEnderecoPessoal = $_POST['complementoEnderecoPessoal'];
    $bairroEnderecoPessoal = $_POST['bairroEnderecoPessoal']; 
    $cidadeEnderecoPessoal = $_POST['cidadeEnderecoPessoal'];
    $ufEnderecoPessoal = $_POST['ufEnderecoPessoal'];
    $cepEnderecoPessoal = $_POST['cepEnderecoPessoal'];
    $telefoneResidencial = $_POST['telefoneResidencial'];
    $telefonePessoal = $_POST['telefonePessoal'];
    $telefoneCelular = $_POST['telefoneCelular'];
    $telefoneComercial = $_POST['telefoneComercial'];
    $email = $_POST['email'];
    $placaVeiculo = $_POST['placaVeiculo'];
    $cidadeVeiculo = $_POST['cidadeVeiculo']; 
    $ufVeiculo = $_POST['ufVeiculo'];
    $corVeiculo = $_POST['corVeiculo'];
    $chassiVeiculo = $_POST['chassiVeiculo'];
    $anoVeiculo = $_POST['anoVeiculo'];
    $renavanVeiculo = $_POST['renavanVeiculo'];
    $combustivelVeiculo = $_POST['combustivelVeiculo'];
    $marcaVeiculo = $_POST['marcaVeiculo'];
    $modeloVeiculo = $_POST['modeloVeiculo'];
    $rntrcVeiculo = $_POST['rntrcVeiculo'];
    $validadeRNTRC = $_POST['validadeRNTRC'];
    $nomeProprietario = $_POST['nomeProprietario';
    $cpfCnpjProprietario = $_POST['cpfCnpjProprietario'];
    $estadoCivilProprietario = $_POST['estadoCivilProprietario'];
    $rgProprietario = $_POST['rgProprietario'];
    $ufRGProprietario = $_POST['ufRGProprietario'];
    $dataEmissaoRGProprietario = $_POST['dataEmissaoRGProprietario'];
    $dataNascimentoProprietario = $_POST['dataNascimentoProprietario'];
    $nomePaiProprietario = $_POST['nomePaiProprietario'];
    $nomeMaeProprietario = $_POST['nomeMaeProprietario'];
    $enderecoProprietario = $_POST['enderecoProprietario'];
    $numeroEnderecoProprietario = $_POST['numeroEnderecoProprietario'];
    $complementoEnderecoProprietario = $_POST['complementoEnderecoProprietario'];
    $bairroEnderecoProprietario = $_POST['bairroEnderecoProprietario'];
    $cidadeEnderecoProprietario = $_POST['cidadeEnderecoProprietario'];
    $ufEnderecoProprietario = $_POST['ufEnderecoProprietario'];
    $cepEnderecoProprietario = $_POST['cepEnderecoProprietario'];
    $telefoneResidencialProprietario = $_POST['telefoneResidencialProprietario'];
    $telefonePessoalProprietario = $_POST['telefonePessoalProprietario'];
    $telefoneCelularProprietario = $_POST['telefoneCelularProprietario'];
    $telefoneComercialProprietario = $_POST['telefoneComercialProprietario'];
    $areaAtuacao = $_POST['areaAtuacao'];
    
    // Query database for row exist or not
    
        $sql = 'INSERT INTO cadastro_candidatos (nom_candidato, cpf_candidato, des_estado_civil_candidato, des_sexo_candidato, num_rg_candidato, uf_rg_candidato, '.
                    'dat_emissao_rg_candidato, dat_nascimento_candidato, des_naturalidade_candidato, uf_naturalidade_candidato, nom_pai_candidato, nom_mae_candidato, '.
                    'num_codigo_cnh, num_registro_cnh, uf_cnh, dat_emissao_cnh, dat_primeira_cnh, des_categoria_cnh, dat_validade_cnh, cod_seguranca_cnh, '.
                    'des_endereco_candidato, num_endereco_candidato, des_complemento_candidato, des_bairro_candidato, des_cidade_candidato, uf_candidato, cep_candidato, ' .
                    'num_telefone_residencial_candidato, num_telefone_pessoal_candidato, num_telefone_celular_candidato, num_telefone_comercial_candidato, des_email, '.
                    'des_placa_veiculo, des_cidade_veiculo, uf_veiculo, des_cor_veiculo, num_chassi_veiculo, num_ano_veiculo, num_renavam_veiculo, des_combustivel_veiculo, '.
                    'des_marca_veiculo, des_modelo_veiculo, num_rntrc_veiculo, dat_validade_rntrc, nom_proprietario_veiculo, num_cpf_cnpj_proprietario, '.
                    'des_estado_civil_proprietario, num_rg_proprietario, uf_rg_proprietario, dat_emissao_rg_proprietario, dat_nascimento_proprietario, nom_pai_proprietario, '.
                    'nom_mae_proprietario, des_endereco_proprietario, des_numero_proprietario, des_complemento_proprietario, des_bairro_proprietario, '.
                    'des_cidade_proprietario, uf_estado_proprietario, num_cep_proprietario, num_telefone_residencial_proprietario, num_telefone_pessoal_proprietario, '.
                    'num_telefone_celular_proprietario, num_telefone_comercial_proprietario, des_area_atuacao)'.
                    'VALUES '.
                    '(:nome, :cpf, :estadoCivil, :sexo, :rg, :ufRG, ' . 
                    ':dataEmissaoRG, :dataNascimento, :naturalidade, :ufNascimento, :nomePai, :nomeMae, '.
                    ':codigoCNH, :registroCNH, :ufCNH, :dataEmissaoCNH, :primeiraEmissaoCNH, :categoria, :validadeCNH, :segurancaCNH, '.
                    ':enderecoPessoal, :numeroEnderecoPessoal, :complementoEnderecoPessoal, :bairroEnderecoPessoal, :cidadeEnderecoPessoal, :ufEnderecoPessoal, :cepEnderecoPessoal, ' .
                    ':telefoneResidencial, :telefonePessoal, :telefoneCelular, :telefoneComercial, :email, '.
                    ':placaVeiculo, :cidadeVeiculo, :ufVeiculo, :corVeiculo, :chassiVeiculo, :anoVeiculo, :renavanVeiculo, :combustivelVeiculo, '.
                    ':marcaVeiculo, :modeloVeiculo, :rntrcVeiculo, :validadeRNTRC, :nomeProprietario, :cpfCnpjProprietario, '.
                    ':estadoCivilProprietario, :rgProprietario, :ufRGProprietario, :dataEmissaoRGProprietario, :dataNascimentoProprietario, :nomePaiProprietario, '.
                    ':nomeMaeProprietario, :enderecoProprietario, :numeroEnderecoProprietario, :complementoEnderecoProprietario, :bairroEnderecoProprietario, '.
                    ':cidadeEnderecoProprietario, :ufEnderecoProprietario, :cepEnderecoProprietario, :telefoneResidencialProprietario, :telefonePessoalProprietario, '.
                    ':telefoneCelularProprietario, :telefoneComercialProprietario, :areaAtuacao)';

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
    $stmt->bindParam(':estadoCivil', $estadoCivil, PDO::PARAM_STR);
    $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
    $stmt->bindParam(':rg', $rg, PDO::PARAM_STR);
    $stmt->bindParam(':dataEmissaoRG', $dataEmissaoRG, PDO::PARAM_STR);
    $stmt->bindParam(':dataNascimento', $dataNascimento, PDO::PARAM_STR);
    $stmt->bindParam(':naturalidade', $naturalidade, PDO::PARAM_STR);
    $stmt->bindParam(':ufNascimento', $ufNascimento, PDO::PARAM_STR);
    $stmt->bindParam(':nomePai', $nomePai, PDO::PARAM_STR);
    $stmt->bindParam(':nomeMae', $nomeMae, PDO::PARAM_STR);
    $stmt->bindParam(':codigoCNH', $codigoCNH, PDO::PARAM_STR);
    $stmt->bindParam(':registroCNH', $registroCNH, PDO::PARAM_STR);
    $stmt->bindParam(':ufCNH', $ufCNH, PDO::PARAM_STR);
    $stmt->bindParam(':dataEmissaoCNH', $dataEmissaoCNH, PDO::PARAM_STR);
    $stmt->bindParam(':primeiraEmissaoCNH', $primeiraEmissaoCNH, PDO::PARAM_STR);
    $stmt->bindParam(':categoria', $categoria, PDO::PARAM_STR);
    $stmt->bindParam(':validadeCNH', $validadeCNH, PDO::PARAM_STR);
    $stmt->bindParam(':segurancaCNH', $segurancaCNH, PDO::PARAM_STR);
    $stmt->bindParam(':enderecoPessoal', $enderecoPessoal, PDO::PARAM_STR);
    $stmt->bindParam(':numeroEnderecoPessoal', $numeroEnderecoPessoal, PDO::PARAM_STR);
    $stmt->bindParam(':complementoEnderecoPessoal', $complementoEnderecoPessoal, PDO::PARAM_STR);
    $stmt->bindParam(':bairroEnderecoPessoal', $bairroEnderecoPessoal, PDO::PARAM_STR);
    $stmt->bindParam(':cidadeEnderecoPessoal', $cidadeEnderecoPessoal, PDO::PARAM_STR);
    $stmt->bindParam(':ufEnderecoPessoal', $ufEnderecoPessoal, PDO::PARAM_STR);
    $stmt->bindParam(':cepEnderecoPessoal', $cepEnderecoPessoal, PDO::PARAM_STR);
    $stmt->bindParam(':telefoneResidencial', $telefoneResidencial, PDO::PARAM_STR);
    $stmt->bindParam(':telefonePessoal', $telefonePessoal, PDO::PARAM_STR);
    $stmt->bindParam(':telefoneCelular', $telefoneCelular, PDO::PARAM_STR);
    $stmt->bindParam(':telefoneComercial', $telefoneComercial, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':placaVeiculo', $placaVeiculo, PDO::PARAM_STR);
    $stmt->bindParam(':cidadeVeiculo', $cidadeVeiculo, PDO::PARAM_STR);
    $stmt->bindParam(':ufVeiculo', $ufVeiculo, PDO::PARAM_STR);
    $stmt->bindParam(':corVeiculo', $corVeiculo, PDO::PARAM_STR);
    $stmt->bindParam(':chassiVeiculo', $chassiVeiculo, PDO::PARAM_STR);
    $stmt->bindParam(':anoVeiculo', $anoVeiculo, PDO::PARAM_STR);
    $stmt->bindParam(':renavanVeiculo', $renavanVeiculo, PDO::PARAM_STR);
    $stmt->bindParam(':combustivelVeiculo', $combustivelVeiculo, PDO::PARAM_STR);
    $stmt->bindParam(':marcaVeiculo', $marcaVeiculo, PDO::PARAM_STR);
    $stmt->bindParam(':modeloVeiculo', $modeloVeiculo, PDO::PARAM_STR);
    $stmt->bindParam(':rntrcVeiculo', $rntrcVeiculo, PDO::PARAM_STR);
    $stmt->bindParam(':validadeRNTRC', $validadeRNTRC, PDO::PARAM_STR);
    $stmt->bindParam(':nomeProprietario', $nomeProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':cpfCnpjProprietario', $cpfCnpjProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':estadoCivilProprietario', $estadoCivilProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':rgProprietario', $rgProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':ufRGProprietario', $ufRGProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':dataEmissaoRGProprietario', $dataEmissaoRGProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':dataNascimentoProprietario', $dataNascimentoProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':nomePaiProprietario', $nomePaiProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':nomeMaeProprietario', $nomeMaeProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':enderecoProprietario', $enderecoProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':numeroEnderecoProprietario', $numeroEnderecoProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':complementoEnderecoProprietario', $complementoEnderecoProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':bairroEnderecoProprietario', $bairroEnderecoProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':cidadeEnderecoProprietario', $cidadeEnderecoProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':ufEnderecoProprietario', $ufEnderecoProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':cepEnderecoProprietario', $cepEnderecoProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':telefoneResidencialProprietario', $telefoneResidencialProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':telefonePessoalProprietario', $telefonePessoalProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':telefoneCelularProprietario', $telefoneCelularProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':telefoneComercialProprietario', $telefoneComercialProprietario, PDO::PARAM_STR);
    $stmt->bindParam(':areaAtuacao', $areaAtuacao, PDO::PARAM_STR);
    if ($stmt->execute())
    {
        echo 'true';   
    } elseif(!$stmt->rowCount()) {
        echo 'false';
    }
	
?>