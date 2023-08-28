create database if not exists `FabulaKids`;
use `FabulaKids`;

drop table if exists `cliente`;
CREATE TABLE `cliente` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `idEndereco` int not null,
  `nome_Cliente` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `senha` varchar(60) NOT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  foreign key(`idEndereco`) references `endereco` (`idEndereco`)
);

drop table if exists `estado`;
CREATE TABLE `estado`(
`idEstado` int NOT NULL AUTO_INCREMENT,
`nome_Estado`varchar(60) DEFAULT NULL,
primary key(`idEstado`)
);

drop table if exists `cidade`;
CREATE TABLE `cidade`(
`idCidade` int NOT NULL AUTO_INCREMENT,
`nome_Cidade` varchar(60) DEFAULT NULL,
`idEstado`int NOT NULL,
primary key(`idCidade`),
foreign key(`idEstado`) references `estado`(`idEstado`)
);

drop table if exists `endereco`;
CREATE TABLE `endereco`(
`idEndereco` int NOT NULL auto_increment,
`idEstado` int NOT NULL,
`idCidade` int NOT NULL,
`bairro` varchar(50) DEFAULT NULL,
`logradouro` varchar(50) DEFAULT NULL,
`CEP` varchar(9) DEFAULT NULL,
primary key(`idEndereco`),
foreign key(`idEstado`) references `estado`(`idEstado`),
foreign key(`idCidade`) references `cidade`(`idCidade`),
);

drop table if exists `produto`;
CREATE TABLE `produto`(
`idProduto` int NOT NULL AUTO_INCREMENT,
`nome_Produto` varchar(60) DEFAULT NULL,
`preco` decimal(10,2) DEFAULT NULL,
`descricao` varchar(60) DEFAULT NULL,
`categoria` varchar(60) DEFAULT NULL,
primary key(`idProduto`)
);
drop table if exists `item_pedido`;
CREATE TABLE `item_pedido`(
`idItem_Pedido` int NOT NULL AUTO_INCREMENT,
`idProduto` int NOT NULL,
`quantidade` int NOT NULL,
primary key(idItem_Pedido),
foreign key(`idProduto`) references `produto`(`idProduto`)
);

drop table if exists `pedido`;
CREATE TABLE `pedido`(
`idPedido` int NOT NULL AUTO_INCREMENT,
`idCliente` int NOT NULL,
`idItem_Pedido` int NOT NULL,
`data_Pedido` datetime NOT NULL,
`preco_total` decimal(10,2) NOT NULL,
`pagamento` int(1) NOT NULL,
#0	=	pagamento não realizado
#1	=	pagamento sendo processado
#2	=	pagamento realizado
`entrega` int(1) NOT NULL,
#0	=	entrega não realizada
#1	=	entrega em andamento
#2	=	entrega realizada
primary key(`idPedido`),
foreign key(`idCliente`) references `produto`(`idCliente`),
foreign key(`idItem_Pedido`) references `produto`(`idItem_Pedido`)
)

#Criar uma tabela ou BD para vendas feitas