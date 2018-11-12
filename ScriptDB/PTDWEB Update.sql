UPDATE Botijas SET 
  nome = ?, 
  tipo = ?, 
  marca = ?, 
  descricao = ?, 
  preco = ?, 
  preco_tara = ? 
WHERE
  id = ?;
UPDATE Botijas_compras SET 
  preco_compra = ?, 
  quantidade = ?, 
  tem_tara = ? 
WHERE
  botijasid = ? AND compraid = ?;
UPDATE Botijas_Maquinas SET 
  stock = ?, 
  num_reservas = ? 
WHERE
  maquinasid = ? AND botijasid = ?;
UPDATE Compras SET 
  utilizador = ?, 
  data = ?, 
  valor = ?, 
  meio_pagamento = ?, 
  qr = ?, 
  pin = ?, 
  data_recolha = ? 
WHERE
  id = ?;
UPDATE Logs SET 
  tab = ?, 
  op = ?, 
  time = ?, 
  utilizador = ?, 
  new = ?, 
  old = ? 
WHERE
  id = ?;
UPDATE Maquinas SET 
  nome = ?, 
  online = ? 
WHERE
  id = ?;
UPDATE Pagamentos SET 
  meio = ? 
WHERE
  id = ?;
UPDATE Roles SET 
  role = ? 
WHERE
  id = ?;
UPDATE Utilizadores SET 
  email = ?, 
  password = ?, 
  nome = ?, 
  morada = ?, 
  codigo_postal = ?, 
  Localidade = ?, 
  nif = ?, 
  cc = ?, 
  genero = ?, 
  data_nascimento = ?, 
  contacto = ?, 
  role = ?, 
  data_registo = ?, 
  data_login = ?, 
  num_cartao = ? 
WHERE
  id = ?;
UPDATE Utilizadores_Botijas SET 
  favorito = ? 
WHERE
  utilizadoresid = ? AND botijasid = ?;

