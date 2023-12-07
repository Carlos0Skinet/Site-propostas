CREATE TABLE IF NOT EXISTS usuarios_simples (
    usi_id INT AUTO_INCREMENT PRIMARY KEY,
    usi_nome VARCHAR(20) NOT NULL,
    usi_email VARCHAR(255) NOT NULL,
    usi_senha VARCHAR(60) NOT NULL,
    usi_data_cadastro DATE NOT NULL,
    usi_nome_completo VARCHAR(255) NOT NULL,
    usi_data_nascimento DATE NOT NULL,
    usi_celular VARCHAR(20) NOT NULL,
    usi_telefone_fixo VARCHAR(20) NOT NULL,
    usi_cep VARCHAR(10) NOT NULL,
    usi_rg_cpf VARCHAR(20) NOT NULL,
    usi_situacao_atual VARCHAR(255) NOT NULL,
    usi_participou_voluntario VARCHAR(3) NOT NULL
);
