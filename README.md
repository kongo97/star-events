# Installazione
```
docker build -t starevents .
docker run -d -p 8000:8000 -v "$PWD/src":/var/www/html --name starevents starevents
docker exec -it starevents bash
```