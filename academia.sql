DROP DATABASE IF EXISTS academia;

CREATE DATABASE academia CHARACTER SET utf8 COLLATE utf8_general_ci;

USE academia;

CREATE TABLE aluno (
matricula INTEGER PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(60) NOT NULL,
telefone VARCHAR(15) NOT NULL,
emailaluno VARCHAR(40) NOT NULL,
CPF CHAR(14) NOT NULL,
RG VARCHAR(15) NOT NULL,
senha VARCHAR(255) NOT NULL,
sexo CHAR(1) NOT NULL,
datanascimento DATE NOT NULL,
CEP CHAR(9) NOT NULL,
numerocasa SMALLINT NOT NULL,
complemento VARCHAR(30),
foto VARCHAR(255)
);

CREATE TABLE funcionario (
CPFfuncionario CHAR (14) PRIMARY KEY,
nome VARCHAR(60) NOT NULL,
telefone VARCHAR(15) NOT NULL,
emailfunc VARCHAR(40) NOT NULL,
RG CHAR(15) NOT NULL,
senha VARCHAR(255) NOT NULL,
sexo CHAR(1) NOT NULL,
CEP CHAR(9) NOT NULL,
numerocasa SMALLINT NOT NULL,
complemento VARCHAR(30),
foto VARCHAR(255),
cargo VARCHAR(40) NOT NULL
);

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
    INSERT INTO aluno(
        nome,
        telefone,
        CPF,
        RG,
        senha,
        datanascimento,
        CEP,
        numerocasa,
        complemento,
        foto,
        sexo,
        emailaluno
        )VALUES(
            'Joca da Silva',
            '(21)99999-9999',
            '133.333.333-33',
            '23.815.589-55',
           '$2y$10$uAcN4hUFJFAjRUe6O9XlI.1PfUz4ppmI3ML4rnpqtFo6u4FxTWpX.',
            '1997/10/20',
            '23085-610',
            '55',
            'fundos',
            'https://randomuser.me/api/portraits/men/14.jpg',
            'M',
            'joca@silva.com'
        ),(
            'Linn Dinha',
            '(21)99999-9997',
            '133.333.333-32',
            '23.815.589-54',
            '$2y$10$uAcN4hUFJFAjRUe6O9XlI.1PfUz4ppmI3ML4rnpqtFo6u4FxTWpX.',
            '1998/09/15',
            '26551-090',
            '55',
            'fundos',
            'https://randomuser.me/api/portraits/women/72.jpg',
            'F',
            'linka@dinn.com'
        ),(
            'Edleuza',
            '(21)98543-1578',
            '156.151.515-61',
            '12.569.658.5',
            '$2y$10$ti8sYIpBiAHLY5ZjmIUw5ugMPrAkTTxxVJiWjY6cFfLJyzVvsCsom',
            '1988-01-10',
            '23059020',
            55,
            '1',
            'https://randomuser.me/api/portraits/women/70.jpg',
            'F',             
            'ed@leuza.com'
        ),(
             'Rafaela',
             '(21)98543-2157',  
             '156.151.515-60', 
             '12.569.658.4', 
            '$2y$10$20WXFwINguTB68EsiR78VetWaiWfN24yGP29ETIiD9X9Ce4.BuK0u', 
            '2001-01-01', 
             '23059060', 
             20, 
            'Casa', 
            'https://randomuser.me/api/portraits/women/60.jpg',
            'F',
            'Rafa@ela.com'
            ),(
             'Pedro Pedrosa',
             '(21)88888-8888', 
             '123.456.123-25', 
             '12.312.312-3', 
             '$2y$10$ZQluUp2R1gY8iZGTc/t2..PZKPoEdYrJdGB3OymSjRl9qgOFzpAue', 
              '2005-05-05', 
             '23059040', 
             30, 
             '2', 
             'https://randomuser.me/api/portraits/men/60.jpg',
             'M',
             'pedro@pedrosa.com'
             ),(             
             'Cristian Silva', 
             '(21)88888-5555', 
             '156.151.515-00', 
             '12.569.658.8', 
             '$2y$10$9CUGD9vpnUQsipR9sIOX9ej.KrYtx4zEjo/6Ycx2HwnCtGkIRWdF.',
              '2000-06-20', 
             '23059010', 
             20, 
             'Casa', 
             'https://randomuser.me/api/portraits/men/50.jpg',
             'M',
             'cristian@silva.com'            
             );

        INSERT INTO funcionario(
            CPFfuncionario,
            nome,
            telefone,
            RG,
            senha,
            CEP,
            numerocasa,
            complemento,
            foto,
            sexo,
            emailfunc,
            cargo
         )VALUES(
            '123.456.789.10',
            'Zé das Couves',
            '(21)99999-9920',
            '12.345.678-99',
            '$2y$10$Absol9xn2R8md5T9ftKXJ.17r2NavLXiORbi6mSN1ny7zz0.DZoZm',
            '26551-090',
            '1',
            'Quadra 15',
            'https://randomuser.me/api/portraits/men/1.jpg',
            'M',
            'ze@couves.com',
            'Professor'
            ),(
            '123.456.789.00',
            'Maria das Dores',
            '(21)99999-9950',
            '12.345.678-90',
            '$2y$10$Absol9xn2R8md5T9ftKXJ.17r2NavLXiORbi6mSN1ny7zz0.DZoZm',
            '23085-610',
            '2',
            'Ap101',
            'https://randomuser.me/api/portraits/women/1.jpg',
            'F',
            'maria@dores.com',
            'Professor'
            ),(
            '123.456.789.50',
            'Maria dos Amores',
            '(21)99999-9988',
            '12.345.678-00',
            '$2y$10$Absol9xn2R8md5T9ftKXJ.17r2NavLXiORbi6mSN1ny7zz0.DZoZm',
            '23085-610',
            '2',
            'Ap105',
            'https://randomuser.me/api/portraits/women/16.jpg',
            'F',
            'maria@amores.com',
            'Recepcionista'
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
            ) VALUES(
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


   