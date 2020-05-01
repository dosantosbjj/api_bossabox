# Code challenge da BossaBox!

Neste reposit�rio publiquei uma API sob os requisitos levantados no desafio de back-end dispon�vel na plataforma da BossaBox.

## Instala��o e execu��o da API:
**I) Clone o reposit�rio:**
    `git clone https://github.com/dosantosbjj/api_bossabox.git`
    
**II) Crie um banco de dados MySQL (formato UTF8-GENERAL) com o nome e ferramenta de sua prefer�ncia;**

**III) Fa�a uma c�pia do arquivo .env.example e configure com o DSN do banco rec�m criado;**

**IV) Gere uma chave para  a API:**		
 - Descomentar a rota /key no arquivo de rotas web.php;
 - Acessar a rota e copiar a key para o arquivo .env;
 - Pode excluir ou manter a rota comentada para uso posterior.
 
**V) Abra um terminal na pasta ra�z do projeto e execute o comando:.**
`php artisan migrate`

**VI) Agora vamos fazer o mock da tabela com dados est�ticos gerados pelo faker:**
`php artisan db:seed`

**Obs.:** pode utilizar a API para cadastrar voc� mesmo as ferramentas que desejar para testar as funcionalidades.

### Finalmente, para rodar nossa API na porta 3000 utilizando o servidor embutido do PHP:
`php -S localhost:3000 -t public`

Se voc� seguiu os passos na ordem deste pequeno tutorial, n�o obteve problemas na execu��o do c�digo!!!

Se houver d�vida na utiliza��o ou quiser desenvolver um client front-end pra consumir esta API, recomendo que leia a documenta��o dispon�vel na ra�z do projeto.
