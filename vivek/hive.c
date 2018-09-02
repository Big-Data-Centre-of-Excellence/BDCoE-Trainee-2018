HIVE : - It is data warehouse.

* first developed by Facebook.
*it is a abstruction layer above HDFS.

* ARCHITUCTURE : - 

* INTERFACE -> QUERY -> DRIVER(COMPILER) -> HQL PROCESSING ENGINE -> HADOOP -> SLAVE NODE (PROCESSING) -> EXCUTION ENGINE -> DRIVER -> RESULT(INTERFACE).

* commands :- 
1. DDL(DATA DEFINATION LANGUAGE) : - 

CREATE TABLE STUDENT(id int , name varchar(30),phone_number int)
 
 (1). Alter table [dd] Rename to [name]
 (2). Alter table <name> ADD COLUMNS
      (column,data)
 (3). Alter table <name> change (col_name)
      <newname> type;

2. DML(DATA MANIPULATION LANGUAGE)
