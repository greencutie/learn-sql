bash refresh.sh

vendor/bin/phinx create CreateEmpTable
vendor/bin/phinx seed:create EmpSeeder

vendor/bin/phinx migrate -e testing
vendor/bin/phinx seed:run -e testing
vendor/bin/phinx rollback -e testing
