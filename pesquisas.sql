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

    -- Pesquisar os nomes, telefones, CPF de todos os Funcionários que o nome começa com Maria ou que tem sobrenome Silva;
    SELECT nome,telefone,CPFfuncionario FROM funcionario WHERE nome LIKE 'Maria%' OR '%Couves';

    -- Alterar a tabela de alunos para inserir o sobrenome nos alunos de matricula 1 e 2
    UPDATE aluno SET nome = 'Joca da Silva Sauro' WHERE matricula = 1;
    UPDATE aluno SET nome = 'Joana da Silva Sauro' WHERE matricula = 2;

    --Pesquisar o nome e telefone dos alunos que o ultimo sobrenome é Sauro
    SELECT nome,telefone FROM aluno WHERE nome LIKE '%Sauro';

    -- Pesquisa a média de preço dos produtos no estoque
    SELECT AVG(valor) FROM produto;

    --PESQUISA O PRODUTO COM O MENOR PREÇO EM ESTOQUE
    SELECT MIN(valor) FROM produto;

    -- PESQUISAR O PRODUTO COM MAIOR VALOR EM ESTOQUE
    SELECT MAX(valor) FROM produto;

    -- PESQUISA O NOME DO ALUNO,TELEFONE, RUA, NUMERO DA CASA E BAIRRO

    SELECT aluno.nome, aluno.telefone, endereco.rua, aluno.numerocasa, 
    endereco.bairro FROM aluno INNER JOIN endereco ON endereco.CEP = aluno.CEP;

    -- Posso dar um apelido a tabela também
    SELECT a.nome, a.telefone, e.rua, a.numerocasa, e.bairro 
    FROM aluno a INNER JOIN endereco e ON e.CEP = a.CEP;

    -- Pesquisar nome da atividade, data da aula e horário de todas as aulas do mes de dezembro de 2022:
    -- Critérios vão sempre após fazer a ligação das tabelas.
    SELECT ativ.nomeatividade, a.dataaula, a.horario 
    FROM atividade ativ INNER JOIN aula a ON a.idatividade = ativ.idatividade
    AND a.dataaula BETWEEN '2022-12-01' AND '2022-12-31';

-- Pesquisar nome e telefone de todos os professores:
SELECT f.nome, f.telefone FROM funcionario f INNER JOIN professor p ON f.CPFfuncionario = p.CPFfuncionario;

-- Pesquisar o nome e o valor de todos os funcionários que fizeram venda em dezembro:
SELECT f.nome, v.valorvenda
 FROM funcionario f INNER JOIN venda v ON f.CPFfuncionario = v.CPFfuncionario AND v.data BETWEEN '2022-12-01' AND '2022-12-31';

-- Pesquisa os nome da atividade, nome dos alunos, data da aula e horario do mes de dezembro:
SELECT ati.nomeatividade, a.dataaula, a.horario, alu.nome
FROM atividade ati  INNER JOIN aula a ON ati.idatividade = a.idatividade
INNER JOIN aulasaluno aa ON a.idaula = aa.idaula 
INNER JOIN aluno alu ON alu.matricula = aa.matricula
AND a.dataaula BETWEEN '2022-12-01' AND '2022-12-31';

--teste Julia
 -- Pesquisa nome do aluno, nome da atividade, nome do professor, data e horario da aulas realizadas:
  -- acho que não ta dando muito certo, está puxando uma aula só
 SELECT a.nome, ativ.nomeatividade, f.nome, aula.dataaula, aula.horario 
 FROM aluno a INNER JOIN aulasaluno ON a.matricula = aulasaluno.matricula
 INNER JOIN aula ON aula.idaula = aulasaluno.idaula
 INNER JOIN atividade ativ ON ativ.idatividade = aula.idatividade
 INNER JOIN professor p ON p.idprofessor = aula.idprofessor
 INNER JOIN funcionario f ON f.CPFfuncionario = p.CPFfuncionario;
--fim teste

    
 -- Pesquisar nome e telefone de todos os professores que tiveram aula no dia 10/12/22:
 SELECT f.nome, f.telefone FROM professor p 
 INNER JOIN funcionario f ON f.CPFfuncionario = p.CPFfuncionario
 INNER JOIN aula ON p.idprofessor = aula.idprofessor
 AND aula.dataaula = '2022-12-10'; -- pode ser IN ao invés de = tbm

 --Pesquisar nome e telefone de todos os professores que podem dar aulas de spinning:
SELECT f.nome, f.telefone FROM funcionario f 
INNER JOIN professor p ON f.CPFfuncionario = p.CPFfuncionario
INNER JOIN habilitaprofessor hp ON p.idprofessor = hp.idprofessor
INNER JOIN atividade ON atividade.idatividade = hp.idatividade
AND atividade.nomeatividade = 'Spinning';

 -- mostrar o total de vendas do dia 05/12/2022:
 SELECT SUM(valorvenda) FROM venda;

 -- Insere Colunas na tabela:
 ALTER TABLE aluno ADD sexo CHAR(1) NOT NULL;
