DELIMITER 
CREATE PROCEDURE CadastrarPeca(
    IN p_nome VARCHAR(100), IN p_preco decimal, IN p_quantidade INT
)
BEGIN
    INSERT INTO peca (nome, preco_unitario, quantidade_estoque)
    VALUES (p_nome, p_preco, p_quantidade);
END 
DELIMITER ;

CALL CadastrarPeca('pastilha de freio',200,10);