<h1>ReadXmlCteNfe</h1>

<p>Biblioteca que faz a leitura do arquivos xml tipo CT-e e NF-e.</p>



<ul>
    <li>
        <h3>Instalação:</h3>
        <p>
           <pre><code>composer require juancarlo99/read-xml-cte-nfe</code></pre><br>
        <spam><a href="https://packagist.org/packages/juancarlo99/read-xml-cte-nfe">Detalhes Aqui</a></spam>
        </p>
    </li>
    <li>
        <h3>Exemplo de Uso:</h3><br>
        <p>
            <h4>Exemplo NF-e</h4>
            <pre>
                <code>
use Xml\Read\Nfe;
<!--  -->
<!--  -->
$nfe = new Nfe("./teste.xml");
$dados = $nfe->all();
    </code>
            </pre><br>
               <pre>
                <code>
use Xml\Read\Nfe;
<!--  -->
// Pode ser usado as buscas separadamente.
<!--  -->
$dados = $nfe->getChave();
$dados = $nfe->getIdentificacaoNFE();
$dados = $nfe->getEmitente();
$dados = $nfe->getDestinatario();
$dados = $nfe->getExpedidor();
$dados = $nfe->getServicos();
$dados = $nfe->getTotal();
$dados = $nfe->getCobranca();
$dados = $nfe->getTransporte();
              </code>
            </pre><br>
  <h4>Exemplo CT-e</h4>
            <pre>
                <code>
use Xml\Read\Cte;
<!--  -->
<!--  -->
$nfe = new Cte("./cte.xml");
<!--  -->
// Pode ser usado as buscas separadamente.
<!--  -->
$dados = $nfe->getCabecalho();
$dados = $nfe->getChave();
$dados = $nfe->getDestinatario();
$dados = $nfe->getEmitente();
$dados = $nfe->getExpedidor();
$dados = $nfe->getRecebedor();
$dados = $nfe->getImposto();
$dados = $nfe->getRemetente();
$dados = $nfe->getServicos();
              </code>
            </pre><br>
            Onde o parametro obrigatório no contrutor é o caminho para um arquivo xml.
        </p>
    </li>
</ul>

