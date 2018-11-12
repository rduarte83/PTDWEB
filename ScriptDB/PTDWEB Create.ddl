CREATE TABLE Botijas (
  id         SERIAL NOT NULL, 
  nome       varchar(50) NOT NULL, 
  tipo       varchar(20) NOT NULL, 
  marca      varchar(20) NOT NULL, 
  descricao  text, 
  preco      float4 NOT NULL, 
  preco_tara float4 NOT NULL, 
  PRIMARY KEY (id));
CREATE TABLE Botijas_compras (
  botijasid    int4 NOT NULL, 
  compraid     int4 NOT NULL, 
  preco_compra float4 NOT NULL, 
  quantidade   int4 NOT NULL, 
  tem_tara     bool NOT NULL, 
  PRIMARY KEY (botijasid, 
  compraid));
CREATE TABLE Botijas_Maquinas (
  maquinasid   int4 NOT NULL, 
  botijasid    int4 NOT NULL, 
  stock        int4 NOT NULL, 
  num_reservas int4 NOT NULL, 
  PRIMARY KEY (maquinasid, 
  botijasid));
CREATE TABLE Compras (
  id             SERIAL NOT NULL, 
  utilizador     int4 NOT NULL, 
  data           timestamp NOT NULL, 
  valor          float8 NOT NULL, 
  meio_pagamento int4 NOT NULL, 
  qr             text NOT NULL, 
  pin            int4 NOT NULL, 
  data_recolha   timestamp, 
  PRIMARY KEY (id));
CREATE TABLE Logs (
  id         SERIAL NOT NULL, 
  tab        text, 
  op         varchar(10), 
  time       timestamp, 
  utilizador varchar(20), 
  new        text, 
  old        text, 
  PRIMARY KEY (id));
CREATE TABLE Maquinas (
  id     SERIAL NOT NULL, 
  nome   varchar(100) NOT NULL, 
  online bool NOT NULL, 
  PRIMARY KEY (id));
CREATE TABLE Pagamentos (
  id   SERIAL NOT NULL, 
  meio varchar(50) NOT NULL, 
  PRIMARY KEY (id));
CREATE TABLE Roles (
  id   SERIAL NOT NULL, 
  role varchar(50) NOT NULL, 
  PRIMARY KEY (id));
CREATE TABLE Utilizadores (
  id              SERIAL NOT NULL, 
  email           varchar(50) NOT NULL UNIQUE, 
  password        text NOT NULL, 
  nome            varchar(100) NOT NULL, 
  morada          varchar(200) NOT NULL, 
  codigo_postal   char(8) NOT NULL, 
  Localidade      varchar(100) NOT NULL, 
  nif             char(9) NOT NULL UNIQUE, 
  cc              char(11) NOT NULL UNIQUE, 
  genero          char(1) NOT NULL, 
  data_nascimento date NOT NULL, 
  contacto        varchar(13), 
  role            int4 NOT NULL, 
  data_registo    date DEFAULT now() NOT NULL, 
  data_login      date, 
  num_cartao      int4 NOT NULL UNIQUE, 
  PRIMARY KEY (id));
CREATE TABLE Utilizadores_Botijas (
  utilizadoresid int4 NOT NULL, 
  botijasid      int4 NOT NULL, 
  favorito       bool NOT NULL, 
  PRIMARY KEY (utilizadoresid, 
  botijasid));
ALTER TABLE Utilizadores ADD CONSTRAINT FKUtilizador744712 FOREIGN KEY (role) REFERENCES Roles (id);
ALTER TABLE Botijas_Maquinas ADD CONSTRAINT FKBotijas_Ma628594 FOREIGN KEY (maquinasid) REFERENCES Maquinas (id);
ALTER TABLE Compras ADD CONSTRAINT FKCompras46643 FOREIGN KEY (utilizador) REFERENCES Utilizadores (id);
ALTER TABLE Botijas_Maquinas ADD CONSTRAINT FKBotijas_Ma237459 FOREIGN KEY (botijasid) REFERENCES Botijas (id);
ALTER TABLE Botijas_compras ADD CONSTRAINT FKBotijas_co176536 FOREIGN KEY (botijasid) REFERENCES Botijas (id);
ALTER TABLE Botijas_compras ADD CONSTRAINT FKBotijas_co67648 FOREIGN KEY (compraid) REFERENCES Compras (id);
ALTER TABLE Utilizadores_Botijas ADD CONSTRAINT FKUtilizador70628 FOREIGN KEY (utilizadoresid) REFERENCES Utilizadores (id);
ALTER TABLE Utilizadores_Botijas ADD CONSTRAINT FKUtilizador700143 FOREIGN KEY (botijasid) REFERENCES Botijas (id);
ALTER TABLE Compras ADD CONSTRAINT FKCompras454532 FOREIGN KEY (meio_pagamento) REFERENCES Pagamentos (id);

