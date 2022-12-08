DROP DATABASE IF EXISTS academia1;

CREATE DATABASE academia1 CHARACTER SET utf8 COLLATE utf8_general_ci;

USE academia1;

CREATE TABLE endereco (
CEP CHAR(9) PRIMARY KEY,
rua VARCHAR(60) NOT NULL,
bairro VARCHAR(40) NOT NULL,
cidade VARCHAR(40) NOT NULL,
UF CHAR(2) NOT NULL);

CREATE TABLE aluno (
matricula INTEGER PRIMARY KEY,
nome VARCHAR(60) NOT NULL,
telefone VARCHAR(15) NOT NULL,
CPF CHAR(14) NOT NULL,
RG VARCHAR(15) NOT NULL,
datanascimento DATE NOT NULL,
CEP CHAR(9) NOT NULL,
numerocasa SMALLINT NOT NULL,
complemento VARCHAR(30),
foto VARCHAR(255),
FOREIGN KEY(CEP) REFERENCES endereco(CEP));

CREATE TABLE funcionario (
CPFfuncionario CHAR (14) PRIMARY KEY,
nome VARCHAR(60) NOT NULL,
telefone VARCHAR(15) NOT NULL,
RG CHAR(15) NOT NULL,
CEP CHAR(9) NOT NULL,
numerocasa SMALLINT NOT NULL,
complemento VARCHAR(30),
foto VARCHAR(255),
FOREIGN KEY(CEP) REFERENCES endereco(CEP));

CREATE TABLE professor(
idprofessor INTEGER PRIMARY KEY,
disponibilidade VARCHAR(40) NOT NULL,
CPFfuncionario VARCHAR(14) NOT NULL,
FOREIGN KEY(CPFfuncionario) REFERENCES funcionario(CPFfuncionario));

CREATE TABLE atividade (
    idatividade INTEGER PRIMARY KEY AUTO_INCREMENT,
    nomeatividade VARCHAR (60) NOT NULL,
    descrição  VARCHAR(100) NOT NULL
);

CREATE TABLE habilitaprofessor(
    idhabilitacao INTEGER PRIMARY KEY AUTO_INCREMENT,
    idatividade INTEGER NOT NULL,
    idprofessor INTEGER NOT NULL,
    FOREIGN KEY (idatividade) REFERENCES atividade (idatividade)
);
CREATE TABLE aula(
    idaula INTEGER PRIMARY KEY AUTO_INCREMENT,
    dataaula DATE NOT NULL,
    horario VARCHAR (30) NOT NULL,
    idprofessor INTEGER NOT NULL,
    idatividade INTEGER NOT NULL,
    FOREIGN KEY (idprofessor) REFERENCES professor (idprofessor),
    FOREIGN KEY (idatividade) REFERENCES atividade (idatividade)
);
CREATE TABLE aulasaluno(
    idaulasaluno INTEGER PRIMARY KEY AUTO_INCREMENT,
    matricula INTEGER NOT NULL,
    idaula INTEGER NOT NULL,
    FOREIGN KEY(matricula) REFERENCES aluno(matricula),
    FOREIGN KEY(idaula) REFERENCES aula (idaula)
);
    CREATE TABLE produto(
        codigoproduto INTEGER PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR (100) NOT NULL,
        cor VARCHAR (50) NOT NULL,
        valor DOUBLE NOT NULL,
        tamanho CHAR(2) NOT NULL,
        quantidade INTEGER NOT NULL
    );
    CREATE TABLE venda(
        idvenda INTEGER PRIMARY KEY AUTO_INCREMENT,
        CPFfuncionario CHAR (14) NOT NULL,
        valorvenda DOUBLE NOT NULL,
        data DATE NOT NULL,
        codigoproduto INTEGER NOT NULL,
        quantidade INTEGER NOT NULL,
        FOREIGN KEY (CPFfuncionario) REFERENCES funcionario(CPFfuncionario),
        FOREIGN KEY (codigoproduto) REFERENCES produto (codigoproduto)
    )