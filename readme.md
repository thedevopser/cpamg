# CPAMG - Castor PHP Automation Management Gear

CPAMG est un outil d'automatisation de tâches construit avec [Castor](https://github.com/jolicode/castor), destiné à faciliter la gestion des projets Symfony et d'autres tâches de développement courantes.

## Fonctionnalités

- **Salutation Utilisateur :** Une tâche de bienvenue qui salue l'utilisateur avec son nom d'utilisateur système.
- **Initialisation de Projet Symfony :** Automatise la création d'un nouveau projet Symfony avec la structure de base du skeleton.

## Prérequis

Pour utiliser CPAMG, vous aurez besoin de :

- PHP 8.1 ou supérieur
- Composer

## Installation

1. Clonez ce dépôt dans votre espace de travail local.
2. Exécutez `composer install` pour installer les dépendances PHP nécessaires.
3. Construisez le fichier PHAR avec Castor en suivant les instructions de la documentation Castor pour le repackaging.
4. Rendez le fichier `cpamg.phar` exécutable avec la commande `chmod +x cpamg.phar`.
5. (Optionnel) Déplacez `cpamg.phar` dans `/usr/local/bin/cpamg` pour pouvoir l'exécuter de n'importe où, similairement à Composer : `sudo mv cpamg.phar /usr/local/bin/cpamg`.

## Utilisation

Une fois CPAMG configuré, vous pouvez exécuter les tâches disponibles comme suit :

- Pour saluer l'utilisateur : `cpamg hello` (si déplacé dans `/usr/local/bin/`), sinon `php cpamg.phar hello`.
- Pour initialiser un nouveau projet Symfony : `cpamg init --path="/chemin/vers/le/dossier" --name="NomDuProjet"` (si déplacé dans `/usr/local/bin/`), sinon `php cpamg.phar init --path="/chemin/vers/le/dossier" --name="NomDuProjet"`.

## Contribuer

Les contributions à CPAMG sont les bienvenues ! Si vous avez une idée d'amélioration ou avez découvert un bug, n'hésitez pas à ouvrir une issue ou à proposer une pull request.

## Licence

CPAMG est distribué sous la licence MIT. Voir le fichier `LICENSE` pour plus d'informations.

## Auteurs

- Votre Nom / [@TheDevOpser](https://https://gitlab.com/thedevopser)
