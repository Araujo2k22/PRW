create database prova2;

use prova2;
DROP TABLE IF EXISTS fluxo_caixa;
create table fluxo_caixa (
	id_fluxo	integer 		not null auto_increment,
    data		date			not null,
	tipo		varchar(10) 	not null,
    valor		decimal(10,5) 	not null,
    historico	varchar(150) 	not null,
    cheque		varchar(3) 		not null,
    PRIMARY KEY (id_fluxo)
);