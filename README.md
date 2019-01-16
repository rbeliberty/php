# php
Lancer plusieurs versions de PHP en local avec Docker

Dans le fichier .bash_aliases (si activé dans le .bashrc)

Faire source .bashrc pour recharger

Commande :
alias php='docker run --rm -u `id -u` -v `pwd`:/src -w /src --rm php:tag'

Exemple : 
alias php73='docker run --rm -u `id -u` -v `pwd`:/src -w /src --rm php:7.3-fpm'
alias php72='docker run --rm -u `id -u` -v `pwd`:/src -w /src --rm php:7.2-fpm'

Taper php72 --version
Taper php73 --version
