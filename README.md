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
alias php73fpm='docker run --rm -it -u `id -u`:`id -g` -p 8080:8080 -v `pwd`:/usr/src/myapp -w /usr/src/myapp php:7.3-fpm php '
alias php72fpm='docker run --rm -it -u `id -u`:`id -g` -p 8080:8080 -v `pwd`:/usr/src/myapp -w /usr/src/myapp php:7.2-fpm php '
alias php73cli='docker run --rm -it -u `id -u`:`id -g` -p 8080:8080 -v `pwd`:/usr/src/myapp -w /usr/src/myapp php:7.3-cli php '
alias php72cli='docker run --rm -it -u `id -u`:`id -g` -p 8080:8080 -v `pwd`:/usr/src/myapp -w /usr/src/myapp php:7.2-cli php '
```

# Exécuter les commandes
```sh
$ php72fpm --version
$ php73fpm --version
$ php72cli --version
$ php73cli --version
```

# Tester un script PHP avec le serveur web interne de PHP
```sh
$ php72fpm -S 0.0.0.0:8080/<file>.php
$ php73fpm -S 0.0.0.0:8080/<file>.php
$ php72cli -S 0.0.0.0:8080/<file>.php
$ php73cli -S 0.0.0.0:8080/<file>.php
```
