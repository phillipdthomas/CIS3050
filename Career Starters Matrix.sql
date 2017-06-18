/*! START TRANSACTION */;
CREATE TABLE Career_Starters_Matrix
(
onet_code CHARACTER (10) NOT NULL,
related_onet_code CHARACTER (10) NOT NULL,
related_index_number DECIMAL (3,0) NOT NULL,
FOREIGN KEY (onet_code) REFERENCES job_data (onet_code),
FOREIGN KEY (related_onet_code) REFERENCES job_data (onet_code));
/*! COMMIT */;
/*! START TRANSACTION */;

INSERT INTO Career_Starters_Matrix (onet_code, related_onet_code, related_index_number)
VALUES ('11-1011.00',	'11-2021.00',	'1');

INSERT INTO Career_Starters_Matrix (onet_code, related_onet_code, related_index_number)
VALUES ('11-1011.00',	'13-1011.00',	'2');

INSERT INTO Career_Starters_Matrix (onet_code, related_onet_code, related_index_number)
VALUES ('11-1011.00',	'11-9111.00',	'3');

INSERT INTO Career_Starters_Matrix (onet_code, related_onet_code, related_index_number)
VALUES ('11-1011.00',	'11-9033.00',	'4');

/*! COMMIT */;