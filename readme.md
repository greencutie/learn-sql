## Setup

1. `git clone https://github.com/mutan/learn-sql`
2. `cd learn-sql`
3. `composer install`
4. Go on with current book instructions

## Books

### 1. Learning SQL. Alan Beaulieu. 2007
1. Check database settings in `phinx-beaulieu.yml`
2. Check DATABASE_NAME in migration file
3. `bash refresh.sh phinx-beaulieu.yml` 

To rollback:  

`vendor/bin/phinx rollback -c phinx-beaulieu.yml -t 0`

### 2. SQL Cookbook. Anthony Molinaro. 2009
1. Check database settings in `phinx-molinaro.yml`
2. `bash refresh.sh phinx-molinaro.yml` 

To rollback:  

`vendor/bin/phinx rollback -c phinx-molinaro.yml -t 0`
