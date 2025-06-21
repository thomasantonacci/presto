**Creare Database Presto**	

create database presto;

**Lanciare le migrazioni**

php artisan migrate

**Lanciare il Bundling degli Assets**

php artisan make:controller PublicController

npm i bootstrap

**Installare Laravel Fortify**

composer require laravel/fortify

php artisan fortify:install

php artisan migrate

**Installare Livewire**

composer require livewire/livewire

**Lanciare la migration per creare la colonna is_revisor nella tabella users**

php artisan make:migration add_is_revisor_column_to_users_table

**Compilare il file .env con i parametri del client di Posta per il servizio mailable della richiesta di diventare revisore**

**Installare Laravel Scout e TNTSEARCH**

composer require laravel/scout

php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"

composer require teamtnt/laravel-scout-tntsearch-driver

**Installare la libreria di bandiere per la funzione multilingua del sito**

composer require outhebox/blade-flags

php artisan vendor:publish --tag=blade-flags --force

**Installazione Middleware per la logica di impostazione lingua**

php artisan make:middleware SetLocaleMiddleware

**Creare le traduzioni**

php artisan lang:publish

**Installare Imagick per il Crop delle Immagini**

INSTALLAZIONE IMAGICK

PER WINDOWS

Scaricare il file zip trovato a questo indirizzo relativo alla versione 8.4 di php https://mlocati.github.io/articles/php-windows-imagick.html 

Estrarre il file zip all’interno della cartella di php 8.4 creando una nuova cartella chiamata php_imagick_3.7.0

Ecco cosa vedremo in :

C:\php\8.4

![image](https://github.com/user-attachments/assets/87e28ec1-92be-4268-8c2f-842417c67330)

Entrare nella cartella
php_imagick_3.7.0
Copiare il file php_imagick.dll all’interno della cartella ext di php, nel nostro caso :
C:\php\8.4\ext

Rinominare il file php_imagick_ts.dll in php_imagick.dll

Aggiungere questa estensione al php.ini che troviamo all’interno della cartella di PHP in questa maniera

![image](https://github.com/user-attachments/assets/ce76e657-1b35-4ce6-8130-9b5715e345a9)

Aggiungere il path della cartella all’interno delle variabili d’ambiente:


![image](https://github.com/user-attachments/assets/479d3554-e446-4d91-b83c-a1cc5debf52d)


![image](https://github.com/user-attachments/assets/4a1f65a0-ccc7-4549-a066-08c059a47dc7)

![image](https://github.com/user-attachments/assets/24f08298-a09f-442d-a909-1acce1ee1071)

![image](https://github.com/user-attachments/assets/b74de887-2b1c-4b05-9079-4e1a18a399e0)

Riavvia il pc per rendere effettive le modifiche.

Una volta riavviato il pc apriamo un terminale e lanciamo il comando

php -m

E vedremo un risultato simile:

![image](https://github.com/user-attachments/assets/dcfb5cef-da02-401d-a2cd-8fa88795d376)


Per specificare al nostro ambiente di lavoro che indentiamo lavorare in asincrono e quindi con le code, assicuriamoci che in .env sia scritto quanto segue alla chiave QUEUE_CONNECTION :

![image](https://github.com/user-attachments/assets/c95d51c8-cd14-4444-b989-2aa010e22f56)


**ATTIVAZIONE DELLE CODE**

Per attivare le code, e quindi il job, dobbiamo sempre lanciare un comando nel terminale:

php artisan queue:work

Da questo momento in poi, avremo sempre tre terminali attivi:

php artisan serve
per il server;

npm run dev
per gli assets;

php artisan queue:work
per mantenere attivi i jobs.

Vogliamo che i controlli permessi da questa API siano effettuati in asincrono: dovremo, dunque, creare un Job apposito

PER WINDOWS - per evitare l’errore certificato SSL:
recarsi al sito curl - Extract CA Certs from Mozilla  https://curl.se/docs/caextract.html e scaricare il primo file:

Spostare il file nella cartella di php

Recarsi in php.ini e modificare la riga ricordandosi di togliere il

curl.cainfo = 'percorso/del/file/nella/vostra/cartella/php/'

