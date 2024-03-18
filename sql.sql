USE pharma;
CREATE TABLE user (
    id varchar(15),
    nome varchar(60),
    email varchar(30),
    senha varchar(60),
    telefone varchar(30),
    endereco varchar(30)
);

INSERT INTO user VALUE('9000','Super Admin','admin@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','9000000','Luanda/Viana');

CREATE TABLE clientes (
   id varchar(15),
   nome varchar(60),
   nif varchar(30),
    email varchar(30),
    senha varchar(60),
    telefone varchar(30),
    pais varchar(15),
    provincia varchar(15),
    cidade varchar(15)
); 
CREATE TABLE fornecedores (
   id varchar(15),
   nome varchar(60),
   nif varchar(30),
    email varchar(30),
    senha varchar(60),
    telefone varchar(30),
    pais varchar(15),
    provincia varchar(15),
    cidade varchar(15)
); 
CREATE TABLE fabricantes (
   id varchar(15),
   nome varchar(60),
   nif varchar(30),
    email varchar(30),
    senha varchar(60),
    telefone varchar(30),
    pais varchar(15),
    provincia varchar(15),
    cidade varchar(15)
); 
CREATE TABLE categorias (
   id varchar(15),
   nome varchar(60),
   estado varchar(30)
   
); 
CREATE TABLE unidades (
   id varchar(15),
   nome varchar(60),
   estado varchar(30)
   
); 
CREATE TABLE tipos (
   id varchar(15),
   nome varchar(60),
   estado varchar(30)
   
); 
CREATE TABLE sub_ff (
   id varchar(15),
   nome varchar(60)
   
);
INSERT INTO sub_ff  VALUE('1','Capsulas');
INSERT INTO sub_ff  VALUE('2','Comprimidos');
INSERT INTO sub_ff  VALUE('3','Drágeas');
INSERT INTO sub_ff  VALUE('4','Pó');
INSERT INTO sub_ff  VALUE('5','Gradulados');
INSERT INTO sub_ff  VALUE('6','Supositórios');
INSERT INTO sub_ff  VALUE('7','Comprimidos');
INSERT INTO sub_ff  VALUE('8','Anéis');
INSERT INTO sub_ff  VALUE('9','Adesivos');
INSERT INTO sub_ff  VALUE('10','Óvulos');
INSERT INTO sub_ff  VALUE('11','Pastilhas');
INSERT INTO sub_ff  VALUE('12','Tabletes');
INSERT INTO sub_ff  VALUE('13','Filmes');
INSERT INTO sub_ff  VALUE('14','Dis. Intra-uterinos');

INSERT INTO sub_ff  VALUE('15','Pomadas');
INSERT INTO sub_ff  VALUE('16','Cremes');
INSERT INTO sub_ff  VALUE('17','Géis');

INSERT INTO sub_ff  VALUE('18','Xaropes');
INSERT INTO sub_ff  VALUE('19','Emulsões');
INSERT INTO sub_ff  VALUE('20','Soluções');
INSERT INTO sub_ff  VALUE('21','Suspensões');
INSERT INTO sub_ff  VALUE('22','Injetaveis');
INSERT INTO sub_ff  VALUE('23','Extratos');
INSERT INTO sub_ff  VALUE('24','Tinturas');

INSERT INTO sub_ff  VALUE('25','Aerossóis');
INSERT INTO sub_ff  VALUE('26','Sprays');

CREATE TABLE formas_farmaceuticas (
   id varchar(15),
   nome varchar(60),
   descricao varchar(15)
   
);

INSERT INTO formas_farmaceuticas  VALUE('1','Solidos','');
INSERT INTO formas_farmaceuticas  VALUE('2','Semi-solidos','');
INSERT INTO formas_farmaceuticas  VALUE('3','Liquidos','');
INSERT INTO formas_farmaceuticas  VALUE('4','Gasosos','');

CREATE TABLE ff_subff (
   id varchar(15),
   id_ff varchar(15),
   id_subff varchar(15)
   
);

INSERT INTO ff_subff  VALUE('1','1','1');
INSERT INTO ff_subff  VALUE('2','1','2');
INSERT INTO ff_subff  VALUE('3','1','3');
INSERT INTO ff_subff  VALUE('4','1','4');
INSERT INTO ff_subff  VALUE('5','1','5');
INSERT INTO ff_subff  VALUE('6','1','6');
INSERT INTO ff_subff  VALUE('7','1','7');
INSERT INTO ff_subff  VALUE('8','1','8');
INSERT INTO ff_subff  VALUE('9','1','9');
INSERT INTO ff_subff  VALUE('10','1','10');
INSERT INTO ff_subff  VALUE('11','1','11');
INSERT INTO ff_subff  VALUE('12','1','12');
INSERT INTO ff_subff  VALUE('13','1','13');
INSERT INTO ff_subff  VALUE('14','1','14');

INSERT INTO ff_subff  VALUE('15','2','15');
INSERT INTO ff_subff  VALUE('16','2','16');
INSERT INTO ff_subff  VALUE('17','2','17');

INSERT INTO ff_subff  VALUE('18','3','18');
INSERT INTO ff_subff  VALUE('19','3','19');
INSERT INTO ff_subff  VALUE('20','3','20');
INSERT INTO ff_subff  VALUE('21','3','21');
INSERT INTO ff_subff  VALUE('22','3','22');
INSERT INTO ff_subff  VALUE('23','3','23');
INSERT INTO ff_subff  VALUE('24','3','24');

INSERT INTO ff_subff  VALUE('25','4','25');
INSERT INTO ff_subff  VALUE('26','4','26');



CREATE TABLE via_administracao (
   id varchar(15),
   nome varchar(60),
   descricao varchar(15),
   id_ff_subff varchar(15)
   
); 

INSERT INTO via_administracao  VALUE('1','Capilar','cabelos','');
INSERT INTO via_administracao  VALUE('2','Dermatológico','cabelos','');
INSERT INTO via_administracao  VALUE('3','Oral','cabelos','');
INSERT INTO via_administracao  VALUE('4','Bucal','cabelos','');
INSERT INTO via_administracao  VALUE('5','Epidural','cabelos','');
INSERT INTO via_administracao  VALUE('6','Inalatórios','cabelos','');
INSERT INTO via_administracao  VALUE('7','Irrigação','cabelos','');
INSERT INTO via_administracao  VALUE('8','Nasal','cabelos','');
INSERT INTO via_administracao  VALUE('9','Oftálmica','cabelos','');
INSERT INTO via_administracao  VALUE('10','Otológicas','cabelos','');
INSERT INTO via_administracao  VALUE('11','Retal','cabelos','');
INSERT INTO via_administracao  VALUE('12','Intra-arterial','cabelos','');
INSERT INTO via_administracao  VALUE('13','Intra-articular','cabelos','');
INSERT INTO via_administracao  VALUE('14','Intratecal','cabelos','');
INSERT INTO via_administracao  VALUE('15','Intramuscular','cabelos','');
INSERT INTO via_administracao  VALUE('16','Intradermica','cabelos','');
INSERT INTO via_administracao  VALUE('17','Intrauterina','cabelos','');
INSERT INTO via_administracao  VALUE('18','Intravenosa','cabelos','');
INSERT INTO via_administracao  VALUE('19','Sublingual','cabelos','');
INSERT INTO via_administracao  VALUE('20','Subcutânea','cabelos','');
INSERT INTO via_administracao  VALUE('21','Transdérmica','cabelos','');
INSERT INTO via_administracao  VALUE('22','Uretral e vaginal','cabelos','');
INSERT INTO via_administracao  VALUE('23','Transdérmica','cabelos','');

CREATE TABLE medicamentos (
   cod varchar(25),
   nome varchar(60),
   nome_gen varchar(60),
   id_unidade varchar(15),
   valor_unidade varchar(15),
   id_via varchar(15),
   id_tipo varchar(15),
   id_fabricante varchar(15),
   id_fornecedor varchar(15),
   descricao varchar(250),
   apresentacao varchar(250),
   conservacao varchar(15),
   id_categoria varchar(15),
   imagem  varchar(300),
   expiravel varchar(15),
   _data date
   
); 