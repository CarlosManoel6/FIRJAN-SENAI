<?php
class Database {
    private $pdo;
    private $host;
    private $db;
    private $user;
    private $pass;
    // Construtor para definir as configurações do banco de dados
    public function __construct($host, $db, $user, $pass, $port = 3307) {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
        $this->port = $port; // Porta padrão é 3306, mas você pode especificar outra.
    }
    // Método para conectar ao banco de dados
    public function connect() {
        try {
            // Cria uma nova instância de PDO para MySQL
            $this->pdo = new PDO("mysql:host={$this->host};port={$this->port};dbname={$this->db};charset=utf8", $this->user, $this->pass);
            // Define o modo de erro do PDO para exceções
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Conexão com o banco de dados MySQL realizada com sucesso!<br>";
        } catch (PDOException $e) {
            // Exibe a mensagem de erro caso a conexão falhe
            echo "Erro na conexão com o banco de dados MySQL: " . $e->getMessage() . "<br>";
        }
    }
    // Método para retornar a instância PDO
    public function getConnection() {
        return $this->pdo;
    }
}
<?php
// verifica se os dados foram enviados via GET
if(isset($_GET['nome'])&& isset($_GET['email'])&& isset($_GET['mensagem'])){
    //captura os dados enviados pelo formulario
    $nome=htmlspecialchars($_GET['nome']);
    $email=htmlspecialchars($_GET['email']);
    $mensagem=htmlspecialchars($_GET['mensagem']);
    //exibe os dados capturados
    echo "<h2>Informações Recebidas:</h2>";
    echo "<p><strong>Nome:</strong>". $nome . "</p>";
    echo "<p><strong>E-mail:</strong>" . $email . "</p>";
    echo "<p><strong>Mensagem</strong>" . $mensagem . "</p>";
    // verifica se a variável $pdo, que deve ser uma instância de PDO, está definida e é váliada
    // prepara uma consulta SQL para selecionar as colunas 'id' e 'nome' da tabela 'usuario'
    $stnt=$pdo->prepare("insert into mensagem(nome, email, mensagem)
    values('$nome','$email','$mensagem');");
    // executa a consulta preparada
    $stnt->execute();
} else{
    echo "Nenhum dado foi enviado"
}
?>