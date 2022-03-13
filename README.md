# Symfony of the galaxy

## installation 

*NEED COMPOSER AND SYMFONY*
```bash
git clone git@github.com:IIM-Creative-Technology/symfony-timoogo.git
```
then 
````bash
cd symfony-timoogo
````
then 
```bash
composer install
```
then
```bash
npm install
```
then
```bash
npm run build # for some reason, some errors happens, i'm trying to fix it
```
````bash
yarn install # for some reason, some errors happens, i'm trying to fix it

````
## fixtures

I had a lot of problems with generating fixtures, because there are relationships and i didn't know from which fixture i should start, so there some work in bd to do :
 - natural_satellite.planet_id [ ]
 - officer.spacecraft_related
 - planet.galaxy_id
````bash
bin/console make:fixtures           
````
## start server 
````bash
symfony server:start
# or
symfony server:start --no-tls #
````
## How the project work
### Entities 
- Galaxies 
- Natural satellites
- Artificial satellites
- Officers
- Planets
## Front 
- Tailwind with the display of the entities 
- each #entities has a list view and a detail view
- to manage them, login (on the navbar)
## back
### credentials
user :timogo
password : password