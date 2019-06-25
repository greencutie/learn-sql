## Setup

1. `git clone https://github.com/mutan/learn-sql`
2. `cd learn-sql`
3. `composer install`
4. Go on with current book instructions

## Documentation

Phinx: [Github](https://github.com/cakephp/phinx) | [phinx.org](http://docs.phinx.org/en/latest)

## Books

### 1. Learning SQL. Alan Beaulieu. 2007
1. Create database `beaulieu` (or whatever, but then change it in `phinx-beaulieu.yml` and in migration file in `beaulieu/migrations/`
2. `bash refresh.sh phinx-beaulieu.yml` 

To rollback:  

`vendor/bin/phinx rollback -c phinx-beaulieu.yml -t 0`

### 2. SQL Cookbook. Anthony Molinaro. 2009
1. Create database `molinaro` (or whatever, but then change it in `phinx-molinaro.yml`)
2. `bash refresh.sh phinx-molinaro.yml` 

To rollback:  

`vendor/bin/phinx rollback -c phinx-molinaro.yml -t 0`

## XAMPP MySQL command line

`cd c:\xampp\mysql\bin`
`mysql.exe -u root --password`
