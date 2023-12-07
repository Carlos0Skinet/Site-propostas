CREATE TABLE tabela_contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    celular VARCHAR(20),
    mensagem TEXT,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
