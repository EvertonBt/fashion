mysql_fetch_row recupera uma tupla e a coloca num array indexado somente pelo índice base 0, cada elemento do array é um campo da tupla, o acesso se dá assim: 
$row = mysql_fetch_row($result); 
echo $row[0]; 
echo $row[1]; 

mysql_fetch_assoc recupera uma tupla e coloca num array indexado somente pelo nome do campo, cada elemento do array é um campo da tupla, o acesso se dá assim: 
$row = mysql_fetch_assoc($result); 
echo $row['username']; 
echo $row['password']; 

mysql_fech_array() recupera uma tupla e coloca num array. A indexação é escolhida no momento da chamada a função, podendo ser indexada pelo índice base 0, ou pelo nome do campo. 
$row = mysql_fetch_array($result, MYSQL_NUM); 
echo $row[0]; 
echo $row[1]; 

$row = mysql_fetch_array($result, MYSQL_ASSOC); 
echo $row['username']; 
echo $row['password']; 

$row = mysql_fetch_array($result, MYSQL_BOTH); 
echo $row[0]; 
echo $row['password']; 

Se vc não passar o segundo parâmetro o padrão é MYSQL_BOTH. Portanto: 
$row = mysql_fetch_array($result); 
echo $row['username']; 
echo $row[1]; 
