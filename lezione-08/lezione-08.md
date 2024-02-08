# I database

-Cos'è un Database? Base di dati
-Struttura dei dati e rappresentazione
-RDBMS: cos'è e cosa fa?

# Tipologie di database

-Database relazionali
    -Struttura tabellare: tabelle(modello relazionale) -> righe e colonne
    -Cosa sono le tabelle? Un tabella è un luogo all'interno del database dove vengono immagazzinati dati di una tipologia specifica
    -Cosa rappresentano le colonne?Rappresentano un campo di un determinato tipo che contiene un'informazione
        -Nomi delle colonne: convenzioni
        -Tipologie di dati: https://dev.mysql.com/doc/refman/8.0/en/data-types.html#:~:text=MySQL%20supports%20SQL%20data%20types,and%20the%20JSON%20data%20type.

    -Cosa rappresentano le righe? Una riga rappresenta un "record" ovvero un'istanza di un dato che vado a inserire nel database
    -Analogia con i dati dei vecchi progetti

    -SQL e query

    -Record: cos'è?

    -Chiavi primarie (analogie con gli array)
        -Che tipo di dato è una primary key? Unsigned biginteger
        -Chi assegna il valore alla primary key? Il valore della primary key viene assegnato tramite un contatore 

    -Chiavi secondarie
        -Foreign key: crea un collegamento e un record su un'altra tabella, solitamente contiene il valore della primary key con cui viene identificato il record
        -Vincolo di integrità referenziale: è un vincolo che impedisce di eliminare dati che vengono puntati o a cui viene fatto un riferimento tramite una chiave esterna

    -Relazioni: one-to-one one-to-many many-to-many ecc...

    -RDBMS o relational database management system : in generale è il sistema che si occupa di gestire, aggiornare e interagire con i database



-Database non relazionali:
    -NoSQL not only sql
        -Key,value
        -Document based: es. json
        -Graph based: (nodi e archi)
        -Column based

# Progettare un database
    -Concetto di Schema: è il progetto del database, informazioni sulle tabella i tipi di dati e le relazioni tra i campi che comporranno il database effettivo
    -Come creare uno schema: https://dbdiagram.io/

# Extra 

    -Installazione mysql e tableplus