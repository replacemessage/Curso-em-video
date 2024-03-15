create table usuario(
	id int NOT NULL AUTO_INCREMENT,
    
	nome varchar(30) NOT NULL,
    email varchar(30) NOT NULL,
    senha varchar(30) NOT NULL,
    
    primary key(id)
) default charset = utf8;