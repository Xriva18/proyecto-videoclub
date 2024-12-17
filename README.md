erDiagram
    USERS {
        INT user_id PK "Identificador único del usuario"
        VARCHAR first_name "Nombre del usuario"
        VARCHAR last_name "Apellido del usuario"
        VARCHAR university "Universidad a la que pertenece el usuario"
        INT role_id FK "Referencia al rol del usuario"
    }

    ROLES {
        INT role_id PK "Identificador único del rol"
        VARCHAR role_name "Nombre del rol"
    }

    GAMES {
        INT game_id PK "Identificador único del juego"
        VARCHAR name "Nombre del juego"
        VARCHAR image "Imagen representativa del juego"
        DECIMAL price "Precio de inscripción al juego"
        INT required_participants "Número requerido de participantes"
        DATETIME schedule_datetime "Fecha y hora del encuentro"
        VARCHAR location "Lugar donde se realiza el evento"
        ENUM game_type "Tipo de juego (Individual o Grupal)"
    }

    SPONSORS {
        INT sponsor_id PK "Identificador único del auspiciador"
        VARCHAR name "Nombre del auspiciador"
        VARCHAR image "Imagen del auspiciador"
        DECIMAL contribution "Aportación del auspiciador"
    }

    INDIVIDUAL_PARTICIPATIONS {
        INT participation_id PK "Identificador único de la participación"
        INT user_id FK "Referencia al usuario participante"
        INT game_id FK "Referencia al juego individual"
        INT payment_id FK "Referencia al pago realizado"
    }

    TEAMS {
        INT team_id PK "Identificador único del equipo"
        VARCHAR team_name "Nombre del equipo"
        INT leader_id FK "Referencia al usuario que lidera el equipo"
        INT game_id FK "Referencia al juego grupal"
        INT payment_id FK "Referencia al pago realizado por el líder"
    }

    TEAM_MEMBERS {
        INT team_id PK FK "Referencia al equipo"
        INT user_id PK FK "Referencia al usuario miembro del equipo"
    }

    PAYMENTS {
        INT payment_id PK "Identificador único del pago"
        INT user_id FK "Referencia al usuario que realiza el pago"
        INT team_id FK "Referencia al equipo (si aplica)"
        VARCHAR receipt_image "Imagen del comprobante de pago"
        VARCHAR receipt_number "Número del comprobante"
        ENUM status "Estado del pago (Pendiente, Aprobado, Rechazado)"
        DATETIME payment_date "Fecha del pago"
    }

    TRANSACTIONS {
        INT transaction_id PK "Identificador único de la transacción"
        ENUM type "Tipo de transacción (Gasto, Ingreso)"
        DECIMAL amount "Monto de la transacción"
        VARCHAR reason "Motivo o detalle de la transacción"
        VARCHAR receipt_image "Imagen del comprobante de la transacción"
        DATETIME date "Fecha de la transacción"
    }

    GAME_SPONSORS {
        INT game_id PK FK "Referencia al juego"
        INT sponsor_id PK FK "Referencia al auspiciador"
    }

    GAME_COORDINATORS {
        INT game_id PK FK "Referencia al juego"
        INT user_id PK FK "Referencia al usuario coordinador"
    }

    %% Relaciones
    USERS ||--o{ ROLES : "tiene"
    GAMES ||--o{ GAME_SPONSORS : "tiene"
    SPONSORS ||--o{ GAME_SPONSORS : "patrocina"
    GAMES ||--o{ INDIVIDUAL_PARTICIPATIONS : "tiene participaciones"
    USERS ||--o{ INDIVIDUAL_PARTICIPATIONS : "participa en"
    GAMES ||--o{ TEAMS : "tiene equipos"
    TEAMS ||--o{ TEAM_MEMBERS : "tiene miembros"
    USERS ||--o{ TEAM_MEMBERS : "es miembro de"
    USERS ||--o{ PAYMENTS : "realiza"
    TEAMS ||--o{ PAYMENTS : "tiene pagos"
    PAYMENTS ||--o{ INDIVIDUAL_PARTICIPATIONS : "paga"
    PAYMENTS ||--o{ TEAMS : "paga"
    GAMES ||--o{ GAME_COORDINATORS : "tiene coordinadores"
    USERS ||--o{ GAME_COORDINATORS : "es coordinador de"
    USERS ||--o{ TEAMS : "lidera"
