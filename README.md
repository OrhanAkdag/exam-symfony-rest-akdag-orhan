# exam-symfony-rest-akdag-orhan

php bin/console doctrine:fixtures:load
pour charger les utilisateurs et les ravioles

# Tester avec postman

Inscription:
method POST
http://localhost:8000/register

{
  "email": "crud@raviole.com",
  "password": "raviole"
}

login:
method POST
http://localhost:8000/login_check 

{
  "username": "crud@raviole.com",
  "password": "raviole"
}

recupère le token

method get
http://localhost:8000/api/ravioles
http://localhost:8000/api/ravioles/1

method put
http://localhost:8000/api/ravioles/1

method delete
http://localhost:8000/api/ravioles/1
