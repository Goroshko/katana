CREATE TABLE users (

    id       INTEGER UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50),
    digesta1 VARCHAR(60),

    UNIQUE(username)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
