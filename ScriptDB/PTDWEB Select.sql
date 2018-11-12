SELECT id, nome, tipo, marca, descricao, preco, preco_tara 
  FROM Botijas;
SELECT botijasid, compraid, preco_compra, quantidade, tem_tara 
  FROM Botijas_compras;
SELECT maquinasid, botijasid, stock, num_reservas 
  FROM Botijas_Maquinas;
SELECT id, utilizador, data, valor, meio_pagamento, qr, pin, data_recolha 
  FROM Compras;
SELECT id, tab, op, time, utilizador, new, old 
  FROM Logs;
SELECT id, nome, online 
  FROM Maquinas;
SELECT id, meio 
  FROM Pagamentos;
SELECT id, role 
  FROM Roles;
SELECT id, email, password, nome, morada, codigo_postal, Localidade, nif, cc, genero, data_nascimento, contacto, role, data_registo, data_login, num_cartao 
  FROM Utilizadores;
SELECT utilizadoresid, botijasid, favorito 
  FROM Utilizadores_Botijas;

