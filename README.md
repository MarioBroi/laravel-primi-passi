# Istruzioni
Oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel!

Per prima cosa, creiamo un nuovo progetto Laravel 10,  utilizzando questo comando: 
```bash
composer create-project laravel/laravel:^10.0 laravel-primi-passi
```

### NB: 
- Occhio, usando il comando sopra indicato creerai una cartella laravel-primi-passi nella quale devono esserci i file e cartelle di progetto di laravel non create sottocartelle aggiuntive. Quindi, procedete con l'inizializzazione della repo in locale e solo dopo create quella remota e la collegate, come facevate con vite.


Al termine dell'installazione, entriamo nella cartella del progetto cd laravel-primi-passi e avviamo l'artisan serve con uno di questi due comandi: 
```bash
php artisan serve 
```
oppure
```bash
php -S localhost:8000 -t public
```
A questo punto, iniziamo a prendere confidenza con le rotte e le views: 
- cancelliamo la view welcome.blade.php e creiamo una nostra homepage.
- Facciamo quindi sì che la rotta / visualizzi home.blade.php 
- Inizialmente stampiamo un Hello World
- poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.

## Bonus:
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()