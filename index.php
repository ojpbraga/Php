<?php
// URL da API
$url = 'https://vmwvcp01.d02.prodemge.gov.br/rest/com/vmware/cis/session';

// Usuário e senha (autenticação básica)
$usuario = 'gpdapi@d02.prodemge.gov.br';
$senha = '7#wIblp#iwlv';

// Iniciar cURL
$ch = curl_init($url);

// Configurar cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Receber resposta como string
curl_setopt($ch, CURLOPT_USERPWD, "$usuario:$senha"); // Autenticação básica
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_POST, true); // Método POST
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Ignorar verificação SSL (só em teste)

// Executar requisição
$resposta = curl_exec($ch);

// Gera o token
$array_token = json_decode($resposta, true);
echo $array_token['value'] . "</br>";

// Fechar cURL
curl_close($ch);

$url = "https://vmwvcp01.d02.prodemge.gov.br/rest/vcenter/vm";

// Token de sessão
$token = $array_token['value'];

// Iniciar cURL
$ch = curl_init($url);

// Configurar cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "vmware-api-session-id: $token"
]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Ignora verificação SSL (não recomendado em produção)

// Executar requisição
$resposta = curl_exec($ch);

$array_ics = json_decode($resposta, true);
foreach ($array_ics["value"] as $vm) {
    echo "Nome: " . $vm["name"] . "\n";
    echo "ID: " . $vm["vm"] . "\n";
    echo "CPU: " . $vm["cpu_count"] . "\n";
    echo "Memória: " . $vm["memory_size_MiB"] . " MiB\n";
    echo "Status: " . $vm["power_state"] . "\n";
    echo "</br>";
}

// Fechar cURL
curl_close($ch);

?>