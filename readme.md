## Books
File **db/sql/learning-sql.sql** conains example database with data for the book **"Learning SQL. Alan Beaulieu. 2007"**.  
  
Migrations and seeders in **db/migrations** and **db/seeds** conains example tables and data for the book **"SQL
Cookbook. Anthony Molinaro. 2009."**.  
  
## Testing Molinaro
### Bash command to rollback, migrate, seed all migrations respectively
bash refresh.sh  

### Commands to do the same manually
vendor/bin/phinx migrate -e testing  
vendor/bin/phinx seed:run -e testing  
vendor/bin/phinx rollback -e testing  

### Commands to create migration and seeder
vendor/bin/phinx create CreateEmpTable  
vendor/bin/phinx seed:create EmpSeeder  
