vendor/bin/phinx migrate -e testing
vendor/bin/phinx seed:run -e testing

vendor/bin/phinx rollback -e testing