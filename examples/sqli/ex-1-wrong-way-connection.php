// Recuperando o parâmetro $name de uma HTTP request...
$name = $_REQUEST("name");
// Configurando a Quey para busca por um suposto campo SSN...
$query = "select ssn from customers where name = '" . $name . "'";
// Execução da Query...
$query->execute();
// Recuperando os dados de nossa SSN como resultado da query...
$ssn->$query->fetchAll();