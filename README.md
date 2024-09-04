# Traccia
Descrizione: Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni: ****- stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

## Flow
- Creazione index.php
    - Boilerplate + form nel body
- Creazione file di ricezione della richiesta (badwords.php)
    - Stampare i dati
        - Manipolare le stringhe (strlen e e str_replace)