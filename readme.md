# Code challenge da BossaBox!

Neste repositório publiquei uma API sob os requisitos levantados no desafio de back-end disponível na plataforma da BossaBox.

## Instalação e execução da API:
**I) Clone o repositório:**
    `git clone https://github.com/dosantosbjj/api_bossabox.git`
    
**II) Crie um banco de dados MySQL (formato UTF8-GENERAL) com o nome e ferramenta de sua preferência;**

**III) Faça uma cópia do arquivo .env.example e configure com o DSN do banco recém criado;**

**IV) Gere uma chave para  a API:**		
 - Descomentar a rota /key no arquivo de rotas web.php;
 - Acessar a rota e copiar a key para o arquivo .env;
 - Pode excluir ou manter a rota comentada para uso posterior.
 
**V) Abra um terminal na pasta raíz do projeto e execute o comando:.**
`php artisan migrate`

**VI) Agora vamos fazer o mock da tabela com dados estáticos gerados pelo faker:**
`php artisan db:seed`

**Obs.:** pode utilizar a API para cadastrar você mesmo as ferramentas que desejar para testar as funcionalidades.

### Finalmente, para rodar nossa API na porta 3000 utilizando o servidor embutido do PHP:
`php -S localhost:3000 -t public`

Se você seguiu os passos na ordem deste pequeno tutorial, não obteve problemas na execução do código!!!

Se houver dúvida na utilização ou quiser desenvolver um client front-end pra consumir esta API, recomendo que leia a documentação disponível na raíz do projeto.
