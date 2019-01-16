# PHP avec Docker
Comment cohabiter et lancer plusieurs versions de PHP en local avec Docker.

# A faire
- Dans le fichier .bash_aliases (si activé dans le .bashrc)
```sh
$ nano .bash_aliases
```
- Exécuter la commande pour recharger :
```sh
$ source .bashrc
```

# Commandes
```sh
alias php='docker run --rm -u `id -u` -v `pwd`:/src -w /src --rm php:tag'
```

# Exemple 
```sh
alias php73='docker run --rm -u `id -u` -v `pwd`:/src -w /src --rm php:7.3-fpm'
alias php72='docker run --rm -u `id -u` -v `pwd`:/src -w /src --rm php:7.2-fpm'
```

# Exécuter les commandes
```sh
$ php72 --version
$ php73 --version
```
