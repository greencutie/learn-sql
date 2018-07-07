## Data loading

### How to load data from .sql file to database
```
use database_name;  
source c:\tmp\sql_file.sql;  
```
### Phynx

#### Bash command to rollback, migrate, seed all migrations respectively
bash refresh.sh  

#### Commands to do the same manually
vendor/bin/phinx migrate -e testing  
vendor/bin/phinx seed:run -e testing  
vendor/bin/phinx rollback -e testing  

#### Commands to create migration and seeder
vendor/bin/phinx create CreateEmpTable  
vendor/bin/phinx seed:create EmpSeeder  

## Books

### 1. Learning SQL. Alan Beaulieu. 2007
Example database with data:  
```
db/sql/learning-sql.sql  
```
### 2. SQL Cookbook. Anthony Molinaro. 2009
Example tables and data: migrations and seeders in  
```
db/migrations  
db/seeds  
```
