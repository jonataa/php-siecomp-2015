# Test Driven Development (TDD)

## Requisitos

* PHP >= 5.4
* Composer [getcomposer.org/download/](https://getcomposer.org/download/)

## Instalando as Dependências

Abra o terminal e digite:

```shell
$ cd TDD/
$ php composer.phar update
```

## Executando os Testes

Após instalar as dependências, abra o terminal e digite:

```shell
$ cd TDD/
$ php vendor/bin/phpunit --bootstrap=vendor/autoload.php tests
```

## Instalando o Composer (opcional)

Esse projeto contém o ```composer.phar```, mas se mesmo assim quiser saber como instalar, então dê uma olhada nas instruções a seguir:

Via Terminal:

```shell
curl -sS https://getcomposer.org/installer | php
```

Se você não tiver curl, instale via PHP:

```shell
php -r "readfile('https://getcomposer.org/installer');" | php
```

Para mais informações, acesse o site do composer [aqui](https://getcomposer.org/download/).

