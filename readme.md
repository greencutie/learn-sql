### Bash command to rollback, migrate, seed all migrations respectively
bash refresh.sh  

### Commands to do the same manually
vendor/bin/phinx migrate -e testing  
vendor/bin/phinx seed:run -e testing  
vendor/bin/phinx rollback -e testing  

### Commands to create migration and seeder
vendor/bin/phinx create CreateEmpTable  
vendor/bin/phinx seed:create EmpSeeder  
