/*! START TRANSACTION */;
CREATE TABLE job_zones (
  code CHARACTER(10) NOT NULL,
  level DECIMAL(1,0) NOT NULL,
  date_updated DATE NOT NULL,
  FOREIGN KEY (code) REFERENCES occupation_data(code), 
  FOREIGN KEY (level) REFERENCES job_zone_reference(level));
/*! COMMIT */;
/*! START TRANSACTION */;

INSERT INTO job_zones (code, level, date_updated) 
VALUES ('11-1011.00', 5, '2014-07-01');
INSERT INTO job_zones (code, level, date_updated)
VALUES ('11-1021.00', 4, '2015-07-01');
INSERT INTO job_zones (code, level, date_updated)
VALUES ('11-2011.00', 4, '2010-06-01');
INSERT INTO job_zones (code, level, date_updated)
VALUES ('11-2022.00', 4, '2016-07-01');
INSERT INTO job_zones (code, level, date_updated) 
VALUES ('11-2031.00', 4, '2009-06-01');
INSERT INTO job_zones (code, level, date_updated) 
VALUES ('11-3031.01', 5, '2012-07-01');


/*I think this table is also in the third normal form because even though there it has no primary key mentions (other than foreign keys).  There is no duplication in the table and no multiple values for each column. */