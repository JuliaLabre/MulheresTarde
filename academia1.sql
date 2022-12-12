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
matricula INTEGER PRIMARY KEY AUTO_INCREMENT,
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
idprofessor INTEGER PRIMARY KEY AUTO_INCREMENT,
disponibilidade VARCHAR(40) NOT NULL,
CPFfuncionario VARCHAR(14) NOT NULL,
FOREIGN KEY(CPFfuncionario) REFERENCES funcionario(CPFfuncionario));

CREATE TABLE atividade (
    idatividade INTEGER PRIMARY KEY AUTO_INCREMENT,
    nomeatividade VARCHAR (60) NOT NULL,
    descrição  VARCHAR(255) NOT NULL
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
    );
    INSERT INTO endereco(
        CEP,
        rua,
        bairro,
        cidade,
        UF
    )VALUES(
        '23085-610',
        'Rua Pauwels',
        'Campo Grande',
        'Rio de Janeiro',
        'RJ'
    ),
    (
        '26551-090',
        'Travessa Elpidio',
        'Cruzeiro do Sul',
        'Mesquita',
        'RJ'
    );
    INSERT INTO aluno(
        nome,
        telefone,
        CPF,
        RG,
        datanascimento,
        CEP,
        numerocasa,
        complemento,
        foto
        )VALUES(
            'Joca da Silva',
            '(21)99999-9999',
            '133.333.333-33',
            '23.815.589-55',
            '1997/10/20',
            '23085-610',
            '55',
            'fundos',
            'https://randomuser.me/api/portraits/men/14.jpg'
        ),(
            'Linka Dinn',
            '(21)99999-9997',
            '133.333.333-32',
            '23.815.589-54',
            '1998/09/15',
            '26551-090',
            '55',
            'fundos',
            'https://randomuser.me/api/portraits/women/72.jpg'
        );
        INSERT INTO funcionario(
            CPFfuncionario,
            nome,
            telefone,
            RG,
            CEP,
            numerocasa,
            complemento,
            foto
         ) VALUES (
            '123.456.789.10',
            'Zé das Couves',
            '(21)99999-9920',
            '12.345.678-99',
            '26551-090',
            '1',
            'Quadra 15',
            'https://randomuser.me/api/portraits/men/1.jpg'
            ),(
            '123.456.789.00',
            'Maria das Dores',
            '(21)99999-9950',
            '12.345.678-90',
            '23085-610',
            '2',
            'Ap101',
            'https://randomuser.me/api/portraits/women/1.jpg'
            ),(
            '123.456.789.50',
            'Maria dos Amores',
            '(21)99999-9988',
            '12.345.678-00',
            '23085-610',
            '2',
            'Ap105',
            'https://randomuser.me/api/portraits/women/16.jpg'
            );
            INSERT INTO professor (
                disponibilidade,
                CPFfuncionario
            )VALUES(
                'Todos os dias',
                '123.456.789.00'
            ),(
                'Todos os dias',
                '123.456.789.10'
            );
            INSERT INTO atividade(
                nomeatividade,
                descrição
            )VALUES(
                'Jump',
                'O Jump é uma das aulas mais populares das academias. O Jump consiste em um exercício aeróbico praticado em um mini trampolim ou cama elástica redonda. Nas aulas, os alunos pulam neste mini trampolim fazendo uma série de movimentos diversificados e com intensidades variadas.'
            ),(
                'Spinning',
                'O ciclismo indoor, muitas vezes chamado de spinning, é uma forma de exercício com aulas focadas em resistência, força, intervalos, alta intensidade e recuperação, e envolve o uso de uma bicicleta ergométrica estacionária especial com um volante ponderado em uma sala de aula.'
            );
            INSERT INTO habilitaprofessor(
                idatividade,
                idprofessor
            ) VALUES (
                '1','1'
            ),(
                '2','2'
            );
            INSERT INTO aula(
                dataaula,
                horario,
                idprofessor,
                idatividade
            ) VALUES (
                '2022-12-06',
                '15h as 16:30h',
                '1',
                '1'
            ),(
                '2022-12-07',
                '15h as 16:30h',
                '1',
                '1'
            ),(
                '2022-12-08',
                '14h as 15:30h',
                '2',
                '2'
            ),(
                '2022-12-10',
                '16h as 17:30h',
                '2',
                '2'
            )
            ;
            INSERT INTO aulasaluno(
                matricula,
                idaula
            )VALUES(
      			'1','1'
            ), ('2','2');
            INSERT INTO produto(
                nome,
                cor,
                valor,
                tamanho,
                quantidade
            )VALUES(
                'Top Red',
                'Vermelho',
                '25',
                'P',
                '30'
            ),(
                'Top Grey and Green',
                'Cinza e verde',
                '20',
                'M',
                '25'
            );
            INSERT INTO venda(
                CPFfuncionario,
                valorvenda,
                data,
                codigoproduto,
                quantidade
            )VALUES(
                '123.456.789.50',
                '40',
                '2022-12-12',
                '2',
                '2'
            ),(
               '123.456.789.50',
                '50',
                '2022-12-12',
                '1',
                '2' 
            );

    -- Seleciona tudo da tabela aluno
        SELECT * FROM aluno;

    --Seleciona as colunas nome e telefone da tabela aluno
        SELECT nome,telefone FROM aluno;

        -- Todas as palavras que tiverem essa combinação descrita no LIKE ele vai puxar:
        SELECT nome,telefone FROM aluno WHERE complemento LIKE '%ap%';

        -- Pesquisa nome e preço de todos os produtos com estoque maior ou igual a 30:
        SELECT nome,valor FROM produto WHERE quantidade >= 30; 

        -- Pesquisar qual a soma do valor dos produtos em estoque
        SELECT SUM(valor) FROM produto;

        --Verifica qual o valor total de mercadoria em estoque
        SELECT SUM(quantidade*valor) FROM produto;

        -- Nomeando pesquisas / colunas
        SELECT SUM(quantidade*valor) as 'Total do estoque' FROM produto;

        --Pesquisar as informações das aulas executadas entre os dias - 6/12/2022 a 10/12/2022 

    --FORMA 1
    SELECT * FROM aula WHERE dataaula >= '2022-12-06' AND dataaula <= '2022-12-10';

    -- FORMA 2
    SELECT * FROM aula WHERE dataaula BETWEEN '2022-12-06' AND '2022-12-10';

    --Pesquisar as informações das aulas executadas nos dias 6/12/22 e 10/12/22
    SELECT * FROM aula WHERE dataaula IN ('2022-12-06','2022-12-10');

    -- formas negativas das pesquisas
    SELECT * FROM aula WHERE dataaula NOT BETWEEN '2022-12-06' AND '2022-12-10';
    SELECT * FROM aula WHERE dataaula NOT IN ('2022-12-06','2022-12-10');

    -- Pesquisar os nomes, telefones, CPF de todos os Funcionários que o nome começa com Maria.
    SELECT nome,telefone,CPFfuncionario FROM funcionario WHERE nome LIKE 'Maria%';

    -- Alterar a tabela de alunos para inserir o sobrenome nos alunos de matricula 1 e 2
    UPDATE aluno SET nome = 'Joca da Silva Sauro' WHERE matricula = 1;
    UPDATE aluno SET nome = 'Joana da Silva Sauro' WHERE matricula = 2;

    --Pesquisar o nome e telefone dos alunos que o ultimo sobrenome é Sauro
    SELECT nome,telefone FROM aluno WHERE nome LIKE '%Sauro';