# Desafio Supliu Tecnologia

### Feito com: PHP (Laravel) + SQLite

### Para testar o projeto:

1. Clone o projeto com o comando:
```
git clone https://github.com/BrunoMonteiro25/desafio-supliu.git
```

2. Certifique-se de ter o SQLite instalado no sistema. Se não estiver instalado, você pode fazer o download e instalá-lo a partir do site oficial: https://www.sqlite.org/download.html

3. Abra um terminal ou prompt de comando e navegue até a raiz do projeto clonado.

4. Execute o comando para instalar as dependências do Laravel:
```
composer install
```

5. Crie uma cópia do arquivo .env.example e renomeie-o para .env. Isso criará um arquivo de ambiente para seu projeto Laravel.

6. Agora, execute o seguinte comando para criar o arquivo de banco de dados SQLite:
```
touch database/database.sqlite
```
Isso criará um arquivo vazio database.sqlite dentro do diretório database.

7. Execute o comando a seguir para gerar a chave de criptografia do aplicativo Laravel:
```
php artisan key:generate
```

8. Em seguida, execute o seguinte comando para executar as migrações e criar as tabelas do banco de dados:
```
php artisan migrate
```
Isso criará as tabelas necessárias no banco de dados SQLite.

9. Para rodar o projeto:
```
php artisan serve
```

### Funcionalidades

- Ver lista de álbuns e faixas
- Pesquisar álbuns por nome
- Adicionar um novo álbum
- Adicionar uma nova faixa em um álbum
- Excluir uma faixa
- Excluir um álbum
- Validações em todos os campos


### Tela inicial
![Screenshot_2](https://github.com/BrunoMonteiro25/react-native-clone-netflix/assets/98993736/90ed6c9f-04ef-414c-a313-36e7c80f6778)

### Novo Álbum
![Screenshot_3](https://github.com/BrunoMonteiro25/react-native-clone-netflix/assets/98993736/a6d352ec-8b87-42ff-b8f8-c50244f3103f)

### Lista de álbuns atualizada
![Screenshot_6](https://github.com/BrunoMonteiro25/react-native-clone-netflix/assets/98993736/13573116-73db-4eec-9d39-985c69c6ab61)

### Adicionar nova faixa
![Screenshot_7](https://github.com/BrunoMonteiro25/react-native-clone-netflix/assets/98993736/0f806e70-48be-4c25-a94c-fb9bcdda6f4e)

### Lista de álbuns atualizada com a nova faixa
![Screenshot_8](https://github.com/BrunoMonteiro25/react-native-clone-netflix/assets/98993736/af1ef0a4-8c1c-4d3c-b1f9-ccc6a6496045)

















