CREATE TABLE tb_produto(
  cd_produto VARCHAR(16) NOT NULL,
  ds_produto VARCHAR(80) NOT NULL,
  qt_quantidade SMALLINT NOT NULL,
  vl_unitario DECIMAL(8,2) NOT NULL,
  CONSTRAINT pk_produto PRIMARY KEY(cd_produto)
)
