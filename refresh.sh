#!/bin/bash
vendor/bin/phinx rollback -c $1 -t 0
vendor/bin/phinx migrate -c $1
vendor/bin/phinx seed:run -c $1