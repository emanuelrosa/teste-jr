# Convênia - Teste prático - DEV PHP JR

> Não se preocupe caso não consiga finalizar o teste, é uma forma de analisar como você pesquisa, programa e resolve os desafios de programação, mas seria legal vê-lo pronto.

### Requisitos:
- PHP
- Banco de dados

### Desejável:
- Laravel

### Descrição do teste:

Desenvolver uma interface de api onde seja possível fazer uma inserção de venda de um vendedor, onde o retorno dessa inserção  será o calculo da comissão da venda (que será de 8.5% em cima do valor da venda) e os dados básicos do vendedor.

#### Dados de retorno da API
- Nome
- Email
- Valor de comissão


> Não é necessário fazer CRUD de vendedores, pode inserir os dados diretamente no banco de dados

> Não é necessário nenhuma forma de login/autenticação

### Forma de de entrega:

Crie um fork deste repositório e após finalizado nos envie por email

### Como usar

```
php artisan migrate --seed
```

### Requisição
```
POST /api/sale
Content-Type: application/json

{
  "seller_id": 1,
  "value": 10000
}
```
Informe o valor da venda em centavos.

### Resposta
```
200 OK
Content-Type: application/json

{
  "name": "Test",
  "email": "test@test.com",
  "commission": "850"
}
```