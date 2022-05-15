CREATE TABLE Login (
  Username TEXT,
  Password TEXT);
    
INSERT INTO Login VALUES ("Chris-Hepp", "Chris");

$dbConnection = mysqli_connect("comp-server.uhi.ac.uk","18005704", "stu4nw","AR18005704");

UPDATE Login
  SET Username= 'Chris-Hepp'
  WHERE Password= 'Chris';