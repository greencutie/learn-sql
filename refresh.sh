#!/bin/bash
# --target or -t //migrate to a specific version; specifying 0 as the target version will revert all migrations
# --configuration or -c //specify a configuration file
vendor/bin/phinx rollback -c $1 -t 0
vendor/bin/phinx migrate -c $1
vendor/bin/phinx seed:run -c $1