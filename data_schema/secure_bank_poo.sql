DROP DATABASE IF EXISTS secure_bank;
CREATE DATABASE secure_bank CHARACTER SET 'utf8';
USE secure_bank;

DROP USER IF EXISTS 'secure_bank_adm'@'Localhost';
CREATE USER 'secure_bank_adm'@'Localhost';
GRANT ALL PRIVILEGES ON secure_bank.* To 'secure_bank_adm'@'Localhost' IDENTIFIED BY 'banque76';

CREATE TABLE Customer (
    c_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    c_last_n VARCHAR(40) NOT NULL,
    c_first_n VARCHAR(40) NOT NULL,
	c_email VARCHAR(40) NOT NULL,
	c_password VARCHAR(40) NOT NULL,
    c_phone VARCHAR(20),
	c_address VARCHAR(40),
	c_postal_code VARCHAR(5),
	c_advisor VARCHAR(20),
    c_last_login TIMESTAMP,
    PRIMARY KEY (c_id)
) ENGINE = InnoDB;

CREATE TABLE Accounts(
	a_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    a_customer_id INT UNSIGNED NOT NULL,
   	a_number VARCHAR(40) NOT NULL,
    a_type VARCHAR(40) NOT NULL,
	a_balance VARCHAR(40),
    PRIMARY KEY (a_id),
    CONSTRAINT fk_c_a FOREIGN KEY (a_customer_id) REFERENCES Customer(c_id)
) ENGINE = InnoDB;

CREATE TABLE Transactions (
    t_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	t_operation_type VARCHAR(30) NOT NULL,
    t_account_number INT UNSIGNED NOT NULL,
    t_operation VARCHAR(40) NOT NULL,
    t_description TEXT,
	t_date TIMESTAMP,
	PRIMARY KEY (t_id),
    CONSTRAINT fk_a_id FOREIGN KEY (t_account_number) REFERENCES Accounts(a_id)
) ENGINE = InnoDB;

INSERT INTO Customer(c_first_n, c_last_n, c_email, c_password, c_phone, c_address, c_postal_code, c_advisor)
Values 
 (
    'root_prenom', 
    'root_nom',
    'root@gmail.com',
    '',
    '0655555555',
	"5, rue de l'Atlas",
	'76600',
	'Mme Doe'
    ),
 (
    'Licornina', 
    'Touss',
    'ceciestunmail@gmail.com',
    'petitpwd',
    '0655555554',
	"5, rue de l'Atlas",
	'76600',
	'M. Doe'
    ),
        
(
    'Nina',
    'Nin',
    'ninanina@hotmail.fr',
    'aussiunpetitpwd',
	'0644444444',
	'12, rue de la petite fraise',
	'82500',
	'Mlle Chat'
);

INSERT INTO Accounts(a_customer_id, a_number, a_type, a_balance)
Values  
(
	'1',
	'25421278',
    'compte courant',
	'-658.56'
),
(
	'1',
	'25421283',
    'PEL',
	'1756.12'
),
(
	'1',
	'25421283',
    'livret A',
	'354.52'
);

INSERT INTO Transactions(t_account_number, t_operation_type, t_operation, t_description, t_date)
Values  (
	1,
	'débit',
    -60,
    'AUCHAN',
	NOW()
),
(
	1,
	'débit',
    -72,
    'SEPHORA',
    NOW()
);
