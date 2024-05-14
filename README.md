# Tradução para Laravel Nova em português brasileiro (pt-BR)

## Instalação

1.  Scaffold do diretório lang

```shell
php artisan lang:publish
```

2.  Instale o pacote

```shell
composer require jefferson-g-lemos/nova4-pt-br --dev
sail composer require jefferson-g-lemos/nova4-pt-br --dev
```

3.  Publique as traduções

```shell
php artisan vendor:publish --tag=nova-pt-br-localization
sail artisan vendor:publish --tag=nova-pt-br-localization
```

4.  Configure o Framework para utilizar 'pt_BR' como linguagem padrão

```
// Altere sua variável de ambiente (.env) para:
APP_LOCALE=pt_BR
```
