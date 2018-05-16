CREATE TABLE pessoas (
	idPessoa INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(80) NOT NULL,
	cpf VARCHAR(15) NOT NULL,
	dataNascimento date DEFAULT NULL,
	CONSTRAINT unique_pessoa_cpf UNIQUE (cpf)
);


CREATE TABLE contas (
	idConta INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	idPessoa INT UNSIGNED NOT NULL,
	saldo DECIMAL(12,2) NOT NULL,
	limiteSaqueDiario DECIMAL(12,2) NOT NULL,
	flagAtivo tinyint(1) NOT NULL,
	tipoConta INT UNSIGNED NOT NULL,
	dataCriacao datetime NOT NULL,
	FOREIGN KEY (idPessoa) REFERENCES pessoas(idPessoa)
);

CREATE TABLE transacoes (
	idTransacao INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	idConta INT UNSIGNED NOT NULL,
	valor DECIMAL(12,2),
	dataTransacao datetime NOT NULL,
	FOREIGN KEY (idConta) REFERENCES contas(idConta)
);

