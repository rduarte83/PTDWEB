CREATE TABLE Utilizador (
  id              SERIAL NOT NULL, 
  mail            varchar(50), 
  password        text NOT NULL, 
  nome            varchar(100) NOT NULL, 
  morada          varchar(200) NOT NULL, 
  codigo_postal   char(8), 
  Localidade      varchar(100), 
  nacionalidade   varchar(50) NOT NULL, 
  nif             char(9) NOT NULL UNIQUE, 
  cc              char(11) NOT NULL UNIQUE, 
  genero          char(1) NOT NULL, 
  data_nascimento date NOT NULL, 
  contacto        varchar(13), 
  role            int4 NOT NULL, 
  data_registo    date DEFAULT now() NOT NULL, 
  data_login      date, 
  num_cartao      int4 NOT NULL UNIQUE);
CREATE TABLE role (
  id   SERIAL NOT NULL, 
  nome varchar(50) NOT NULL);
CREATE TABLE Role (
  id   SERIAL NOT NULL, 
  role varchar(50) NOT NULL);
CREATE TABLE Maquinas (
  id     SERIAL NOT NULL, 
  nome   varchar(100) NOT NULL, 
  estado int4 NOT NULL);
CREATE TABLE Botijas_Maquinas (
  Maquinasid   int4 NOT NULL, 
  Botijasid    int4 NOT NULL, 
  stock        int4 NOT NULL, 
  num_reservas int4 NOT NULL);
CREATE TABLE Compra (
  id             SERIAL NOT NULL, 
  utilizador     int4 NOT NULL, 
  data           timestamp NOT NULL, 
  valor          float8 NOT NULL, 
  meio_pagamento int4 NOT NULL, 
  qr             text NOT NULL, 
  pin            int4 NOT NULL, 
  data_recolha   timestamp);
CREATE TABLE Botijas (
  id         SERIAL NOT NULL, 
  nome       varchar(50) NOT NULL, 
  tipo       int4 NOT NULL, 
  marca      int4 NOT NULL, 
  descricao  text, 
  preco      float8 NOT NULL, 
  preco_tara float8 NOT NULL);
CREATE TABLE Botijas_compra (
  Botijasid    int4 NOT NULL, 
  compraid     int4 NOT NULL, 
  preco_compra float8 NOT NULL, 
  quantidade   int4 NOT NULL, 
  tem_tara     bool NOT NULL);
CREATE TABLE Utilizador_Botijas (
  Utilizadorid int4 NOT NULL, 
  Botijasid    int4 NOT NULL, 
  favorito     bool);
CREATE TABLE Pagamento (
  id   SERIAL NOT NULL, 
  meio varchar(50) NOT NULL);
