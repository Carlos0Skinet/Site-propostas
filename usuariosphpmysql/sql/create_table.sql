CREATE TABLE IF NOT EXISTS usuarios_simples (
    usi_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usi_nome VARCHAR(20),
    usi_senha VARCHAR(60),
    usi_data_cadastro DATE
);